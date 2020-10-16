<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/tailwind.min.css" rel="stylesheet">
	<script src="js/alpine.js" defer></script>
	@hasSection('title')

     <title>@yield('title') - {{ config('app.name') }}</title>
    @else
     <title>{{ config('app.name') }}</title>
    @endif
</head>

	<body class="antialiased bg-gray-200">

		<div x-data="{ sidemenu: false }" class="h-screen flex overflow-hidden" x-cloak @keydown.window.escape="sidemenu = false">

			<div class="md:hidden">
				<div @click="sidemenu = false" class="fixed inset-0 z-30 bg-gray-600 opacity-0 pointer-events-none transition-opacity ease-linear duration-300" :class="{'opacity-75 pointer-events-auto': sidemenu, 'opacity-0 pointer-events-none': !sidemenu}"></div>

				<!-- Small Screen Menu -->
				<div class="fixed inset-y-0 left-0 flex flex-col z-40 max-w-xs w-full bg-white transform ease-in-out duration-300 -translate-x-full" :class="{'translate-x-0': sidemenu, '-translate-x-full': !sidemenu}">

					<!-- Brand Logo / Name -->
					<div class="flex items-center px-6 py-3 h-16">
						<div class="text-2xl font-bold tracking-tight text-gray-800">{{ config('app.name') }}</div>
					</div>
					<!-- @end Brand Logo / Name -->

					<div class="px-4 py-2 flex-1 h-0 overflow-y-auto">
						<ul>
							<li>
								<a href="#"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
										<rect x="4" y="4" width="6" height="6" rx="1" />
										<rect x="14" y="4" width="6" height="6" rx="1" />
										<rect x="4" y="14" width="6" height="6" rx="1" />
										<rect x="14" y="14" width="6" height="6" rx="1" />
									</svg>
									Dashboard
								</a>
							</li>

							<li>
								<a href="{{ route('dashboard.sites') }}"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
										<line x1="4" y1="19" x2="20" y2="19" />
										<polyline points="4 15 8 9 12 11 16 6 20 10" />
									</svg>
									Sites
								</a>
							</li>

							<li>
								<a href="#"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
									<svg class="mr-4 opacity-50" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="book-open w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
									Articles
								</a>
							</li>

							<li>
								<a href="#"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-700 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
										<circle cx="12" cy="12" r="9" />
										<polyline points="12 7 12 12 9 15" />
									</svg>
									Tracking
								</a>
							</li>

							<li>
								<a href="#"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
										<path
											d="M16 6h3a 1 1 0 011 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
										<line x1="8" y1="8" x2="12" y2="8" />
										<line x1="8" y1="12" x2="12" y2="12" />
										<line x1="8" y1="16" x2="12" y2="16" />
									</svg>
									History
								</a>
							</li>

							<li>
								<a href="{{ route('dashboard.settings') }}"
									class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
									<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
										viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
										stroke-linecap="round" stroke-linejoin="round">
										<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
										<path
											d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
										<circle cx="12" cy="12" r="3" />
									</svg>
									Settings
								</a>
							</li>
						</ul>
					</div>

				</div>
				<!-- @end Small Screen Menu -->
			</div>


			<!-- Menu Above Medium Screen -->
			<div class="bg-white w-64 min-h-screen overflow-y-auto hidden md:block shadow relative z-30">

				<!-- Brand Logo / Name -->
				<div class="flex items-center px-6 py-3 h-16">
					<div class="text-2xl font-bold tracking-tight text-gray-800">{{ config('app.name') }}</div>
				</div>
				<!-- @end Brand Logo / Name -->

				<div class="px-4 py-2">
					<ul>
						<li>
							<a href="{{ route('dashboard') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<rect x="4" y="4" width="6" height="6" rx="1" />
									<rect x="14" y="4" width="6" height="6" rx="1" />
									<rect x="4" y="14" width="6" height="6" rx="1" />
									<rect x="14" y="14" width="6" height="6" rx="1" />
								</svg>
								Dashboard
							</a>
						</li>

						<li>
							<a href="{{ route('dashboard.sites') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<line x1="4" y1="19" x2="20" y2="19" />
									<polyline points="4 15 8 9 12 11 16 6 20 10" />
								</svg>
								Sites
							</a>
						</li>

						<li>
							<a href="{{ route('dashboard.articles') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<svg class="mr-4 opacity-50" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="book-open w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
								Articles
							</a>
						</li>

						<li>
							<a href="#"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-blue-600 hover:text-blue-600 hover:bg-gray-200 bg-gray-200">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<circle cx="12" cy="12" r="9" />
									<polyline points="12 7 12 12 9 15" />
								</svg>
								Tracking
							</a>
						</li>

						<li>
							<a href="#"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="chart-bar w-6 h-6 mr-4 opacity-50" width="24" height="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                    </path>
                                </svg>
								Reports
							</a>
						</li>

						<li>
							<a href="{{ route('dashboard.settings') }}"
								class="mb-1 px-2 py-2 rounded-lg flex items-center font-medium text-gray-700 hover:text-blue-600 hover:bg-gray-200">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-4 opacity-50" width="24" height="24"
									viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
									stroke-linecap="round" stroke-linejoin="round">
									<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
									<path
										d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
									<circle cx="12" cy="12" r="3" />
								</svg>
								Settings
							</a>
						</li>
					</ul>

					<div class="bg-orange-200 mb-10 p-6 rounded-lg mt-16">
						<h2 class="text-gray-800 text-lg leading-tight">Try <strong class="font-bold">Dashing Admin.</strong></h2>
						<p class="text-gray-800 text-lg mb-4 leading-tight">Premium for free!</p>

						<button class="shadow text-center w-full block bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg">
							30 Days Free Trail
						</button>
					</div>
				</div>
			</div>
			<!-- @end Menu Above Medium Screen -->

			<div class="flex-1 flex-col relative z-0 overflow-y-auto">
				<div class="px-4 md:px-8 py-2 h-16 flex justify-between items-center shadow-sm bg-white">
					<div class="flex items-center w-2/3">
						<input class="bg-gray-200 focus:outline-none focus:shadow-outline focus:bg-white border border-transparent focus:border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal hidden md:block placeholder-gray-700 mr-10" type="text" placeholder="Search...">

						<div class="p-2 rounded-full hover:bg-gray-200 cursor-pointer md:hidden" @click="sidemenu = !sidemenu">
							<svg xmlns="http://www.w3.org/2000/svg" class="text-gray-600"
								width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
								fill="none" stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<line x1="4" y1="6" x2="20" y2="6" />
								<line x1="4" y1="12" x2="20" y2="12" />
								<line x1="4" y1="18" x2="20" y2="18" />
							</svg>
						</div>
						<div class="text-xl font-bold tracking-tight text-gray-800 md:hidden ml-2">{{ config('app.name') }}</div>
					</div>
					<div class="flex items-center">

						<a href="#" class="text-gray-500 p-2 rounded-full hover:text-blue-600 hover:bg-gray-200 cursor-pointer mr-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<rect x="0" y="0" width="24" height="24" stroke="none"></rect>
								<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
								<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
							</svg>
						</a>

						<div class="relative" x-data="{ open: false }" x-cloak>
							<div @click="open = !open"
								class="cursor-pointer font-bold w-10 h-10 bg-blue-200 text-blue-600 flex items-center justify-center rounded-full">
								DA
							</div>

							<div x-show.transition="open" @click.away="open = false"
								class="absolute top-0 mt-12 right-0 w-48 bg-white py-2 shadow-md border border-gray-100 rounded-lg z-40">
								<a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Edit
									Profile</a>
								<a href="#"
									class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Account
									Settings</a>
								<a href="#" class="block px-4 py-2 text-gray-600 hover:bg-gray-100 hover:text-blue-600">Sign
									Out</a>
							</div>
						</div>
					</div>
				</div>

				@yield('dashcontent')
			</div>
		</div>
	</body>

</html>
