# Regenerates front-page.php from index.html.
# index.html is the source of truth for the homepage; front-page.php is
# generated output, so edit index.html and re-run this script.

$root = Split-Path -Parent $MyInvocation.MyCommand.Path
$src = Join-Path $root "index.html"
$dest = Join-Path $root "front-page.php"

$html = Get-Content $src -Raw -Encoding UTF8

# Swap the static head/header and footer for the WordPress partials
$html = $html -replace '(?s)^.*?</header>', '<?php get_header(); ?>'
$html = $html -replace '(?s)<footer.*$', '<?php get_footer(); ?>'

# Rewrite asset paths to the theme directory. Relative paths work in the
# standalone index.html but break in WordPress, where the page URL is not
# the theme folder.
$uri = '<?php echo get_template_directory_uri(); ?>/images/'
$html = $html -replace 'src="images/', "src=`"$uri"
$html = $html -replace 'srcset="images/', "srcset=`"$uri"
$html = $html -replace 'href="images/', "href=`"$uri"
# CSS url() references, e.g. the hero carousel slides
$html = $html -replace "url\('images/", "url('$uri"
$html = $html -replace 'url\("images/', "url(`"$uri"
$html = $html -replace 'url\(images/', "url($uri"

# Write UTF-8 WITHOUT a BOM. Set-Content -Encoding UTF8 adds one in
# PowerShell 5.1, and a BOM ahead of "<?php" is emitted by PHP as output
# before any headers are sent.
$html = $html -replace "^\xEF\xBB\xBF", ""
[System.IO.File]::WriteAllText($dest, $html, (New-Object System.Text.UTF8Encoding $false))

$left = ([regex]::Matches($html, '(?<!get_template_directory_uri\(\); \?>/)images/')).Count
Write-Host "Wrote $dest"
Write-Host "Unrewritten 'images/' references remaining: $left"
