<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSAPP') }}</title>

    <!-- Fonts -->
   <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
   -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">





	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
            .search-container {
      position: relative;
      width: 300px;
      margin: 20px auto;
    }

    .search-input {
      width: 100%;
      padding: 10px;
      border-radius: 30px;
      border: none;
      background-color: #f2f2f2;
      color: #333;
      font-size: 16px;
      outline: none;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-input:focus {
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .search-icon {
      position: absolute;
      top: 10px;
      right: 10px;
      width: 20px;
      height: 20px;
      fill: #888;
    }
    .highlight {
      background-color: yellow;
      font-weight: bold;
    }
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}
	</style>


	<!-- Custom styles for this template -->
	<link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="blog.css" rel="stylesheet">
    <!-- Scripts -->
   <!--vite(['resources/sass/app.scss', 'resources/js/app.js'])-->
</head>
<body>
    <div id="app">


        <main class="py-4">
            @include('inc.navbar')

            <div class="container">
            @include('inc.messages')
            @yield('content')
            </div>
        </main>
    </div>
</body>
<script>
    // JavaScript code to prompt for email subscription
    var subscribeLink = document.getElementById('subscribeLink');
    subscribeLink.addEventListener('click', function(event) {
      event.preventDefault();
      var email = prompt('Enter your email to subscribe for notifications:');
      if (email) {
        // Perform further actions with the email, such as sending it to a server for processing
        console.log('Subscribed with email:', email);
        alert('Thank you for subscribing!');
      }
    });

    var searchInput = document.getElementById('searchInput');
    var content = document.getElementById('content');

    searchInput.addEventListener('input', function() {
      var keyword = searchInput.value.trim();
      clearHighlighting(content);

      if (keyword !== '') {
        highlightKeyword(content, keyword);
      }
    });

    function clearHighlighting(element) {
      var marks = element.getElementsByTagName('mark');
      while (marks.length > 0) {
        var mark = marks[0];
        var textNode = document.createTextNode(mark.textContent);
        mark.parentNode.replaceChild(textNode, mark);
      }
    }

    function highlightKeyword(element, keyword) {
      var regex = new RegExp(keyword, 'gi');
      var nodes = getTextNodes(element);

      for (var i = 0; i < nodes.length; i++) {
        var node = nodes[i];
        var matches = node.textContent.match(regex);

        if (matches) {
          matches.forEach(function(match) {
            var mark = document.createElement('mark');
            mark.textContent = match;
            node.parentNode.insertBefore(mark, node.nextSibling);
          });
        }
      }
    }

    function getTextNodes(element) {
      var nodes = [];
      var treeWalker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT, null, false);

      while (treeWalker.nextNode()) {
        nodes.push(treeWalker.currentNode);
      }

      return nodes;
    }
  </script>
</html>
