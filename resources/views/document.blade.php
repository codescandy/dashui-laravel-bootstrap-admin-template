@extends('layouts.default', ['page' => 'document'])
@section('title')
    Document
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-12 p-8">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mb-0" id="intro">
                            <h1 class="mb-2">Introduction</h1>
                            <p class="mb-0 lead text-dark">
                                Dash-UI - Laravel Admin Dashboard Template's codes are developer-friendly and easily
                                customizable.
                                In addition to saving your team time and money, it will help your team to move forward
                                faster.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mb-4">
                            <div class="mt-6" id="css">
                                <h4 class="mb-2">Key Features :</h4>
                            </div>
                            <div>
                                <ul>
                                    <li>Build with Laravel 10.*</li>
                                    <li>Build with Bootstrap v5.*</li>
                                    <li>Laravel Vite Based Workflow</li>
                                    <li>Fully Responsive Design</li>
                                    <li>Light-Weight Code</li>
                                    <li>Easy to Customize with SCSS Variables</li>
                                    <li>Authentication & Error Pages</li>
                                    <li>Profile, Settings, Billing and Pricing Pages</li>
                                    <li>Bootstrap components</li>
                                    <li>Three level Menu level</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="mb-4">
                            <h2 class="fw-medium">Getting Started</h2>
                            <p class="mb-0 lead text-dark">
                                <a href="https://laravel.com/docs/10.x/" target="_blank">Laravel</a> integrates seamlessly
                                with <a href="https://laravel.com/docs/10.x/vite" target="_blank">Vite</a> by providing an
                                official plugin and Blade directive to load your assets for development and production.
                            </p>

                            {{-- Prerequisites --}}
                            <div class="mt-6" id="css">
                                <h4 class="mb-2">Prerequisites</h4>
                            </div>
                            <p>
                                All prerequisites must be installed and setup as described below.
                            </p>
                            <div>
                                <ul>
                                    <li><b>Xampp / WAMP</b><br />
                                        <p>
                                            Make sure to have the <a href="https://www.apachefriends.org/"
                                                target="_blank">Xampp</a> or <a href="https://www.wampserver.com/en/"
                                                target="_blank">WAMP</a> server installed & running in your computer.
                                            Laravel 10 only runs on PHP 8.1 or greater.
                                        </p>
                                    </li>

                                    <li><b>Composer</b><br />
                                        <p>
                                            Make sure to have the <a href="https://getcomposer.org/"
                                                target="_blank">Composer</a> installed & running in your computer and
                                            it must be 2.2.0 or Higher.
                                        </p>
                                    </li>

                                    <li><b>Nodejs</b><br />
                                        <p>
                                            Make sure to have the <a href="https://nodejs.org/en"
                                                target="_blank">Node.js</a> installed & running in your computer.
                                        </p>
                                    </li>
                                </ul>
                            </div>


                            {{-- Installation --}}
                            <div class="mt-6" id="css">
                                <h4 class="mb-2">Installation</h4>
                            </div>
                            <p>
                                Installing and running Laravel-DashUI is super easy, here are the steps you need to follow
                                to get started.
                            </p>
                            <div>
                                <ol>
                                    <li>Unzip the downloaded <code>dashui-free-laravel</code> folder.</li>
                                    <li>Rename the folder to your project's name</li>
                                    <li> <code>cd</code> to your Laravel app i.e. your project's name</li>
                                    <li><code>npm install</code> : with this command all required dependencies would be
                                        installed in the <code>node_modules</code> directory. </li>
                                    <li><code>composer install</code> : this command will install all of the framework's
                                        dependencies.</li>
                                    <li>Copy <code>.env.example</code> to <code>.env</code> and updated the required
                                        configurations (mainly the database configuration)</li>
                                    <li><code>php artisan key:generate</code> : run this command to generate the new key.
                                    </li>
                                    <li><code>php artisan optimize:clear</code> : run this command to clear all cache from
                                        the project.</li>
                                    <li><code>php artisan migrate:fresh</code>: run this command to generate fresh migration
                                        tables.(This command will remove exisiting tables if any from Database and create
                                        new one.)</li>
                                </ol>
                            </div>



                            {{-- Local Development --}}
                            <div class="mt-6" id="css">
                                <h4 class="mb-2">Local Development</h4>
                            </div>
                            <p>
                                Once installtion is done as per above steps, you need to start below services with
                                respective commands.
                            </p>
                            <div>
                                <ol>
                                    <li><b>Serving Laravel</b><br />
                                        <p>To serve your Laravel application, you need to use the below serve Artisan
                                            command:
                                            <pre class="mb-2"><code class="language-markup">php artisan serve</code></pre>


                                            By default the HTTP-server will listen to port <code>8000</code>. However if
                                            that port is already in use or you wish to serve multiple applications this way,
                                            you might want to specify what port to use. Just add the <code>--port</code>
                                            argument:

                                            <pre class="my-2"><code class="language-markup">php artisan serve --port=8080</code></pre>


                                            Here your development server is accessible at <code>http://localhost:8000</code>
                                            or <code>http://127.0.0.1:8000</code> assuming you have not specified port or
                                            default port <code>8000</code> has been used by laravel application.

                                        </p>
                                    </li>
                                    <li><b>Running Vite</b><br />
                                        <p>To run Vite development server you need to use the below npm command:
                                            <pre class="mb-2"><code class="language-markup">npm run dev</code></pre>
                                            Above command is useful for developing application locally. The development
                                            server will automatically detect changes to your files and instantly reflect
                                            them in any open browser windows.

                                        </p>
                                        <p>
                                            Here Vite development server is accessible at <code>http://localhost:5173</code>
                                            or <code>http://127.0.0.1:5173</code>
                                            because Vite development server will use <code>5173</code> port by default, if
                                            that port is already being used, Vite will automatically try the next available
                                            port so this may not be the actual port the server ends up listening on.
                                        </p>
                                        <p>Here are more details about <a
                                                href="https://vitejs.dev/config/server-options.html" target="_blank">Vite
                                                Server options</a>
                                        </p>
                                        <p>Your Vite assets i.e. CSS, SCSS, JS or Images will use below path, which you can
                                            verify from page source or inspect element option.</p>
                                        <hr />
                                        <b>CSS/SCSS Path :</b><br /> <br />
                                        <code class="language-markup p-2">
                                            &lt;link rel="stylesheet"
                                            href="http://127.0.0.1:5173/resources/scss/theme.scss"&gt;
                                        </code>
                                        <hr />
                                        <b>JS Path :</b><br /> <br />
                                        <code class="language-markup p-2">
                                            &lt;script type="module"
                                            src="http://127.0.0.1:5173/resources/js/app.js"&gt;&lt;/script&gt;
                                        </code>
                                        <hr />
                                        <b>Images Path :</b><br /> <br />
                                        <code class="language-markup p-2">
                                            &lt;img src="http://127.0.0.1:5173/resources/images/brand/logo/logo.svg"
                                            alt="DashUI White Logo"&gt;
                                        </code>
                                        </p>
                                    </li>
                                </ol>
                                <ul>
                                    <li><b>Note :</b><br />
                                        <p>To run Laravel+Vite development locally you need to follow above both steps.</p>
                                    </li>
                                </ul>
                            </div>


                            {{-- Deployment --}}
                            <div class="mt-6" id="css">
                                <h4 class="mb-2">Deployment</h4>
                            </div>


                            <ol>
                               <li><b>Caching Configuration</b><br />
                                    <p>When deploying your application to production, you should make sure that you run the <code>config:cache</code> Artisan command during your deployment process:
                                        <pre class="my-2"><code class="language-markup">php artisan config:cache</code></pre>

                                    </p>
                                </li>
                                <li><b>Build for production </b><br />
                                    <p>Now, run the following command to generate the production build for deployment.
                                        <pre class="my-2"><code class="language-markup">npm run build</code></pre>

                                    </p>
                                </li>

                                <li><b>.env Configuration</b><br />
                                    <p>When deploying to production, make sure to change your <code>.env</code> variables' values including database credentials:
                                            <code ><br/>
APP_ENV=production <br/>
APP_DEBUG=false <br/>
APP_URL=https://yourdomain.com</code>

                                    </p>
                                </li>
                                
                                

                            </ol>
                            <p> <b>Note:</b><br/>
                                Here, we have listed the basic changes you have to do before deploying DashUi template.<br/>
                                For laravel deployment tips and tricks follow its official documentation: <a href="https://laravel.com/docs/10.x/deployment"
                                    target="_blank">https://laravel.com/docs/10.x/deployment
                                </a>
                            </p>



                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>
    </div>

    <!-- Wrapper  -->
@endsection
