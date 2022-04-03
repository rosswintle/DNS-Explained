<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="page-{{ $page->getFilename() }}" style="background-color: {{ $page->pageColor }};">
        <main>
        	<h1>
        		DNS Explained
        	</h1>
        	<div class="top-image">
        		@yield('top-image')
        	</div>
        	<div class="text">
        		@yield('body')
        	</div>
       		<div class="link">
				<a class="button-link" href="/{{ $page->nextPage }}">
					{{ $page->buttonText }}
				</a>
       		</div>
        </main>
<!-- Fathom - beautiful, simple website analytics -->
<script src="https://cdn.usefathom.com/script.js" data-site="OYHRMSMT" defer></script>
<!-- / Fathom -->
    </body>
</html>
