<?php
function pageName($ss)
{
    if ($ss === 'tos')
        return 'Terms of Service';
    else
        return 'Privacy Policy';
}
?>
<html>

<head>
    <title>{{pageName($subsection)}}</title>
    <link rel="stylesheet" href="/main.css">
</head>

<body>
    <div>
        <h1>Legal: {{pageName($subsection)}}</h1>
        @if($subsection==='tos')
        <p>You may not access non-public areas of the website.</p>
        <!-- etc -->
        @else
        <p>Data collected by the website is not shared externally.</p>
        <!-- etc -->
        @endif
    </div>
</body>

</html>