<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="shortcut icon" href="{{ asset('images/youandme.png') }}" type="image/x-icon"> --}}
	<title>You And Me For Indonesia</title>

	{{-- <style>
		.looping-rhombuses-spinner, .looping-rhombuses-spinner * {
			box-sizing: border-box;
		}

		.looping-rhombuses-spinner {
			width: calc(30px * 4);
			height: 30px;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		.looping-rhombuses-spinner .rhombus {
			height: 30px;
			width: 30px;
			background-color: #000;
			left: calc(30px * 4);
			position: absolute;
			margin: 0 auto;
			border-radius: 2px;
			transform: translateY(0) rotate(45deg) scale(0);
			animation: looping-rhombuses-spinner-animation 2500ms linear infinite;
		}

		.looping-rhombuses-spinner .rhombus:nth-child(1) {
			animation-delay: calc(2500ms * 1 / -1.5);
		}

		.looping-rhombuses-spinner .rhombus:nth-child(2) {
			animation-delay: calc(2500ms * 2 / -1.5);
		}

		.looping-rhombuses-spinner .rhombus:nth-child(3) {
			animation-delay: calc(2500ms * 3 / -1.5);
		}

		@keyframes looping-rhombuses-spinner-animation {
			0% {
				transform: translateX(0) rotate(45deg) scale(0);
			}
			50% {
				transform: translateX(-233%) rotate(45deg) scale(1);
			}
			100% {
				transform: translateX(-466%) rotate(45deg) scale(0);
			}
		}
	</style> --}}
</head>
<body>
	<div id="app">
		<app>
		</app>
	</div>

	{{-- <script src="{{ asset('components/ckeditor/ckeditor.js') }}"></script> --}}
	<script src="{{ asset('js/app.js') }}"></script>

	{{-- <script id="dsq-count-scr" src="//youandme4id.disqus.com/count.js" async></script> --}}
</body>
</html>