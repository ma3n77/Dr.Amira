$html = Get-Content "c:\AmiraWP\amira-clinic-theme\index.html" -Raw -Encoding UTF8
$html = $html -replace '(?s)^.*?</header>', '<?php get_header(); ?>'
$html = $html -replace '(?s)<footer.*$', '<?php get_footer(); ?>'
$html = $html -replace 'src="images/', 'src="<?php echo get_template_directory_uri(); ?>/images/'
Set-Content -Path "c:\AmiraWP\amira-clinic-theme\front-page.php" -Value $html -Encoding UTF8
