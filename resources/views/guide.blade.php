<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Guide - CubeTech Innovations</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        code {
            background-color: #f3f4f6;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
            font-size: 0.9em;
        }
        
        pre {
            background-color: #1f2937;
            color: #f9fafb;
            padding: 1rem;
            border-radius: 8px;
            overflow-x: auto;
            margin: 1rem 0;
        }
        
        pre code {
            background-color: transparent;
            color: inherit;
            padding: 0;
        }
        
        .step-card {
            border-left: 4px solid #60a5fa;
            padding-left: 1.5rem;
            margin: 1.5rem 0;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-sm fixed w-full top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">C</span>
                    </div>
                    <span class="text-gray-800 font-semibold text-lg">CubeTech Innovations</span>
                </div>
                <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-600 font-semibold">← Back to Home</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-24 pb-16">
        <div class="container mx-auto px-6 max-w-4xl">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">How to Build This Web Application</h1>
            <p class="text-xl text-gray-600 mb-12">A complete guide to setting up and customizing your Laravel web application</p>

            <!-- Prerequisites -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Prerequisites</h2>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-gray-700 mb-4">Before you begin, make sure you have the following installed:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li><strong>PHP 8.2+</strong> - Required for Laravel</li>
                        <li><strong>Composer</strong> - PHP dependency manager</li>
                        <li><strong>Node.js & npm</strong> - For frontend assets (Vite & Tailwind CSS)</li>
                        <li><strong>Laravel Herd</strong> - Development environment (you're already using this!)</li>
                        <li><strong>MySQL</strong> - Database (optional, only if you need database features)</li>
                    </ul>
                </div>
            </section>

            <!-- Step 1: Project Setup -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 1: Project Setup</h2>
                <div class="step-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">1.1 Create Laravel Project</h3>
                    <p class="text-gray-700 mb-4">If you haven't created the project yet, run:</p>
                    <pre><code>composer create-project laravel/laravel my-laravel-web</code></pre>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">1.2 Install Dependencies</h3>
                    <p class="text-gray-700 mb-4">Install PHP dependencies:</p>
                    <pre><code>composer install</code></pre>
                    
                    <p class="text-gray-700 mb-4 mt-6">Install Node.js dependencies:</p>
                    <pre><code>npm install</code></pre>
                </div>
            </section>

            <!-- Step 2: Environment Configuration -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 2: Environment Configuration</h2>
                <div class="step-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">2.1 Configure .env File</h3>
                    <p class="text-gray-700 mb-4">Copy the example environment file:</p>
                    <pre><code>cp .env.example .env</code></pre>
                    
                    <p class="text-gray-700 mb-4 mt-6">Generate application key:</p>
                    <pre><code>php artisan key:generate</code></pre>
                    
                    <p class="text-gray-700 mb-4 mt-6">For Herd users, your app should be accessible at:</p>
                    <pre><code>http://my-laravel-web.test</code></pre>
                    <p class="text-gray-600 text-sm mt-2">(Check Herd dashboard for your exact domain)</p>
                </div>
            </section>

            <!-- Step 3: Asset Compilation -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 3: Compile Assets</h2>
                <div class="step-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">3.1 Run Vite Development Server</h3>
                    <p class="text-gray-700 mb-4">This compiles Tailwind CSS and watches for changes:</p>
                    <pre><code>npm run dev</code></pre>
                    <p class="text-gray-600 text-sm mt-2">Keep this terminal running while developing. It will automatically reload when you make changes.</p>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">3.2 For Production</h3>
                    <p class="text-gray-700 mb-4">When ready to deploy, build optimized assets:</p>
                    <pre><code>npm run build</code></pre>
                </div>
            </section>

            <!-- Step 4: Project Structure -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 4: Project Structure</h2>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-gray-700 mb-4">Key files and directories:</p>
                    <ul class="space-y-3 text-gray-700">
                        <li>
                            <code>routes/web.php</code> - Defines your routes
                            <p class="text-sm text-gray-600 ml-6">Currently has: <code>Route::get('/', function () { return view('home'); });</code></p>
                        </li>
                        <li>
                            <code>resources/views/home.blade.php</code> - Main homepage template
                            <p class="text-sm text-gray-600 ml-6">This is where all your page content lives</p>
                        </li>
                        <li>
                            <code>resources/css/app.css</code> - Tailwind CSS configuration
                        </li>
                        <li>
                            <code>public/images/</code> - Store your images here
                            <p class="text-sm text-gray-600 ml-6">Access them using: <code>@{{ asset('images/filename.jpg') }}</code></p>
                        </li>
                        <li>
                            <code>vite.config.js</code> - Vite configuration for asset bundling
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Step 5: Customization -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 5: Customizing Your Website</h2>
                <div class="step-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">5.1 Update Images</h3>
                    <p class="text-gray-700 mb-4">Place your images in <code>public/images/</code> folder:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700 mb-4">
                        <li><code>architecture.jpg</code> - Hero section city image</li>
                        <li><code>restaurant.jpg</code> - SnapServe product image</li>
                        <li><code>qr.jpg</code> - QR code scanning image</li>
                        <li><code>meet1.jpg</code>, <code>meet2.jpeg</code> - Team meeting photos</li>
                        <li><code>man.jpg</code>, <code>girl.jpg</code> - Team member photos</li>
                        <li><code>ceo.jpg</code>, <code>ceo2.jpg</code>, <code>ceo3.jpg</code> - Testimonial photos</li>
                    </ul>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">5.2 Update Content</h3>
                    <p class="text-gray-700 mb-4">Edit <code>resources/views/home.blade.php</code> to change:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Text content (headings, paragraphs)</li>
                        <li>Team member names and titles</li>
                        <li>Testimonials</li>
                        <li>Statistics numbers</li>
                        <li>Navigation links</li>
                    </ul>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">5.3 Change Colors</h3>
                    <p class="text-gray-700 mb-4">The site uses Tailwind CSS. Main colors:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li><code>bg-blue-400</code> - Primary blue (buttons, accents)</li>
                        <li><code>bg-gray-50</code> - Light gray background</li>
                        <li><code>bg-white</code> - White cards and sections</li>
                        <li><code>text-gray-900</code> - Dark text</li>
                    </ul>
                    <p class="text-gray-600 text-sm mt-4">To change colors, replace these classes in the Blade template or customize Tailwind in <code>resources/css/app.css</code></p>
                </div>
            </section>

            <!-- Step 6: Adding New Pages -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 6: Adding New Pages</h2>
                <div class="step-card bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">6.1 Create a New View</h3>
                    <p class="text-gray-700 mb-4">Create a new Blade template in <code>resources/views/</code>:</p>
                    <pre><code>resources/views/about.blade.php</code></pre>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">6.2 Add a Route</h3>
                    <p class="text-gray-700 mb-4">In <code>routes/web.php</code>, add:</p>
                    <pre><code>Route::get('/about', function () {
    return view('about');
})->name('about');</code></pre>
                    
                    <h3 class="text-xl font-semibold mt-6 mb-4">6.3 Link to the Page</h3>
                    <p class="text-gray-700 mb-4">In your Blade templates, use:</p>
                    <pre><code>&lt;a href="@{{ route('about') }}"&gt;About Us&lt;/a&gt;</code></pre>
                </div>
            </section>

            <!-- Step 7: Common Commands -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 7: Useful Commands</h2>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="space-y-4">
                        <div>
                            <code class="text-lg">php artisan serve</code>
                            <p class="text-gray-600 text-sm mt-1">Start Laravel development server (not needed with Herd)</p>
                        </div>
                        <div>
                            <code class="text-lg">php artisan view:clear</code>
                            <p class="text-gray-600 text-sm mt-1">Clear compiled view cache if changes don't appear</p>
                        </div>
                        <div>
                            <code class="text-lg">php artisan cache:clear</code>
                            <p class="text-gray-600 text-sm mt-1">Clear application cache</p>
                        </div>
                        <div>
                            <code class="text-lg">php artisan config:clear</code>
                            <p class="text-gray-600 text-sm mt-1">Clear configuration cache</p>
                        </div>
                        <div>
                            <code class="text-lg">npm run dev</code>
                            <p class="text-gray-600 text-sm mt-1">Start Vite dev server (required for CSS/JS)</p>
                        </div>
                        <div>
                            <code class="text-lg">npm run build</code>
                            <p class="text-gray-600 text-sm mt-1">Build production assets</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Step 8: Troubleshooting -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 8: Troubleshooting</h2>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold text-lg mb-2">"Internal Server Error" or "View not found"</h4>
                            <p class="text-gray-700 mb-2">Run these commands:</p>
                            <pre><code>php artisan view:clear
php artisan cache:clear
php artisan config:clear</code></pre>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-lg mb-2">CSS/JS not loading</h4>
                            <p class="text-gray-700 mb-2">Make sure Vite is running:</p>
                            <pre><code>npm run dev</code></pre>
                            <p class="text-gray-600 text-sm mt-2">Keep this terminal open while developing</p>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Images not showing</h4>
                            <p class="text-gray-700 mb-2">Check that:</p>
                            <ul class="list-disc list-inside space-y-1 text-gray-700">
                                <li>Images are in <code>public/images/</code> folder</li>
                                <li>File names match exactly (case-sensitive)</li>
                                <li>Using <code>@{{ asset('images/filename.jpg') }}</code> syntax</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Check Laravel Logs</h4>
                            <p class="text-gray-700 mb-2">View errors in:</p>
                            <pre><code>storage/logs/laravel.log</code></pre>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Step 9: Next Steps -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Step 9: Next Steps</h2>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <p class="text-gray-700 mb-4">Now that your site is running, you can:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Add a contact form handler (create a controller)</li>
                        <li>Set up a database for dynamic content</li>
                        <li>Add authentication (login/register)</li>
                        <li>Create an admin panel</li>
                        <li>Add more pages (About, Services, Blog, etc.)</li>
                        <li>Optimize images for web</li>
                        <li>Add SEO meta tags</li>
                        <li>Set up email functionality</li>
                    </ul>
                </div>
            </section>

            <!-- Project Explanation -->
            <section class="mb-12">
                <h2 class="text-3xl font-bold text-blue-500 mb-6">Project Explanation</h2>
                
                <!-- Tools and Frameworks -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Tools, Languages, and Frameworks Used</h3>
                    
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-2">Backend:</h4>
                        <ul class="list-disc list-inside space-y-1 text-gray-700">
                            <li><strong>Laravel 11</strong> - PHP framework for web application structure and routing</li>
                            <li><strong>PHP 8.2+</strong> - Server-side programming language</li>
                        </ul>
                    </div>
                    
                    <div class="mb-4">
                        <h4 class="font-semibold text-lg mb-2">Frontend:</h4>
                        <ul class="list-disc list-inside space-y-1 text-gray-700">
                            <li><strong>Tailwind CSS 4.0</strong> - Utility-first CSS framework for styling</li>
                            <li><strong>Blade Templates</strong> - Laravel's templating engine for dynamic HTML</li>
                            <li><strong>Vite</strong> - Modern build tool for asset compilation and hot module replacement</li>
                            <li><strong>Inter Font</strong> - Google Fonts for typography</li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-lg mb-2">Development Environment:</h4>
                        <ul class="list-disc list-inside space-y-1 text-gray-700">
                            <li><strong>Laravel Herd</strong> - Local development environment</li>
                            <li><strong>Node.js & npm</strong> - Package management for frontend dependencies</li>
                            <li><strong>Composer</strong> - PHP dependency management</li>
                        </ul>
                    </div>
                </div>

                <!-- Design Translation Process -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">How the Design Was Translated into Code</h3>
                    
                    <div class="space-y-4 text-gray-700">
                        <div>
                            <h4 class="font-semibold mb-2">1. Layout Analysis</h4>
                            <p class="mb-2">Studied the provided design images to identify key sections:</p>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Fixed navigation bar with logo and dropdown menus</li>
                                <li>Hero section with two-column layout (content card + background image)</li>
                                <li>Statistics section with four metric columns</li>
                                <li>Product showcase sections (SnapServe) with alternating layouts</li>
                                <li>About section with team photo grid</li>
                                <li>Mission & Vision columns</li>
                                <li>Team member carousel</li>
                                <li>Testimonials section</li>
                                <li>Contact form</li>
                                <li>Footer with links and newsletter signup</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">2. Styling Implementation</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Used Tailwind CSS utility classes for responsive grid layouts (<code>grid-cols-1 md:grid-cols-2</code>)</li>
                                <li>Implemented custom CSS for shadows, rounded corners, and hover effects</li>
                                <li>Matched color scheme: Blue (#60a5fa/blue-400) for accents, gray backgrounds (#f9fafb/gray-50), white cards</li>
                                <li>Replicated rounded corner styles (particularly the bottom-right corner of the hero image)</li>
                                <li>Applied proper spacing and typography hierarchy</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">3. Laravel Integration</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Used <code>@{{ asset() }}</code> helper for image paths</li>
                                <li>Implemented <code>@csrf</code> for form security</li>
                                <li>Created named routes using <code>route('name')</code> helper</li>
                                <li>Used Blade syntax for dynamic content</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">4. Responsive Design</h4>
                            <p>Applied mobile-first approach with Tailwind's breakpoint system to ensure the design works across all device sizes.</p>
                        </div>
                    </div>
                </div>

                <!-- Challenges Encountered -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Challenges Encountered</h3>
                    <ul class="list-disc list-inside space-y-3 text-gray-700">
                        <li><strong>Image Path Management:</strong> Initially used hardcoded paths (<code>/images/...</code>) before switching to Laravel's <code>asset()</code> helper for proper asset management.</li>
                        <li><strong>View Caching:</strong> Encountered "View not found" errors due to cached compiled views. Resolved by running <code>php artisan view:clear</code>.</li>
                        <li><strong>Asset Compilation:</strong> Required running <code>npm run dev</code> simultaneously with Herd to compile Tailwind CSS. Users need to understand both processes must run concurrently.</li>
                        <li><strong>PowerShell Syntax:</strong> Windows PowerShell doesn't support <code>&&</code> for chaining commands, requiring separate command execution.</li>
                        <li><strong>Multiple Design Images:</strong> Had to synthesize multiple design mockups into a single cohesive page while maintaining design consistency across sections.</li>
                        <li><strong>Hover Dropdowns:</strong> Implemented CSS-only dropdown menus using hover states, which required careful z-index and positioning management.</li>
                    </ul>
                </div>

                <!-- Improvements with More Time -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">What Would Be Improved with More Time</h3>
                    
                    <div class="space-y-4 text-gray-700">
                        <div>
                            <h4 class="font-semibold mb-2">1. Backend Functionality</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Implement contact form submission with email notifications</li>
                                <li>Add database integration for dynamic content (team members, testimonials)</li>
                                <li>Create admin panel for content management (CRUD operations)</li>
                                <li>Add form validation and error handling</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">2. Enhanced Features</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Implement actual carousel/slider functionality for team section (JavaScript/Swiper.js)</li>
                                <li>Add smooth scroll animations (AOS.js or Framer Motion)</li>
                                <li>Create additional pages (About, Services, Blog, Product pages)</li>
                                <li>Add search functionality</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">3. Performance Optimizations</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Image optimization (WebP format, lazy loading)</li>
                                <li>Implement caching strategies</li>
                                <li>Code splitting and bundle optimization</li>
                                <li>Add service worker for offline functionality</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">4. Code Quality</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Extract reusable Blade components (navigation, footer, card components)</li>
                                <li>Create a layout template to avoid code duplication</li>
                                <li>Implement partials for modularity</li>
                                <li>Add Laravel localization for multi-language support</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">5. SEO & Accessibility</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Add proper meta tags and Open Graph tags</li>
                                <li>Implement structured data (Schema.org)</li>
                                <li>Ensure WCAG compliance (ARIA labels, keyboard navigation)</li>
                                <li>Add sitemap.xml and robots.txt</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">6. Testing & Deployment</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Write PHPUnit tests for routes and controllers</li>
                                <li>Add browser testing (Laravel Dusk)</li>
                                <li>Set up CI/CD pipeline</li>
                                <li>Configure production environment variables</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">7. Design Enhancements</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Add loading states and transitions</li>
                                <li>Implement dark mode toggle</li>
                                <li>Create more interactive hover effects</li>
                                <li>Add micro-interactions for better UX</li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 class="font-semibold mb-2">8. Documentation</h4>
                            <ul class="list-disc list-inside space-y-1 ml-4">
                                <li>Create API documentation (if backend API is needed)</li>
                                <li>Add inline code comments</li>
                                <li>Create deployment guide</li>
                                <li>Document environment setup procedures</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="bg-blue-50 border-l-4 border-blue-400 rounded-lg p-6">
                    <p class="text-gray-700 leading-relaxed">
                        <strong>Conclusion:</strong> This project successfully translates multiple design mockups into a fully functional, responsive Laravel web application using modern tools and best practices. The implementation prioritizes code maintainability, user experience, and adherence to Laravel conventions while staying true to the original design aesthetics.
                    </p>
                </div>
            </section>

            <!-- Footer -->
            <div class="mt-12 pt-8 border-t border-gray-200 text-center text-gray-600">
                <p>Need help? Check the <a href="https://laravel.com/docs" target="_blank" class="text-blue-500 hover:underline">Laravel Documentation</a></p>
                <p class="mt-2">Or visit <a href="https://tailwindcss.com/docs" target="_blank" class="text-blue-500 hover:underline">Tailwind CSS Docs</a> for styling help</p>
            </div>
        </div>
    </div>

</body>
</html>
