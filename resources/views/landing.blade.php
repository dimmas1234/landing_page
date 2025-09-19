<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biccas - Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">Biccas</div>
        <nav class="nav-links">
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="#" class="login">Login</a>
            <a href="#" class="signup">Sign Up</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-left">
            <h1>We’re here to<br> Increase your<br> Productivity</h1>
            <div class="line">
                <img src="{{ asset('images/Line.png') }}" alt="line decorative">
            </div>

            <p>
                Let's make your work more organize and easily using
                the Taskio Dashboard with many of the latest
                features in managing work every day.
            </p>
            <div class="hero-buttons">
                <a href="#" class="btn-primary">Try free trial</a>
                <a href="#" class="btn-secondary">
                    <span class="btn-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#191A15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="6 4 20 12 6 20 6 4"></polygon>
                        </svg>
                    </span>
                    View Demo
                </a>
            </div>


        </div>

        <div class="hero-right">
            <div class="image-container">
                <img src="{{ asset('images/Gambar orang.png') }}" alt="Hero Image" class="main-image">
            </div>
        </div>
    </section>
    <!-- Collaboration Section -->
    <section class="collaboration">
        <h2>More than 25,000 teams use Collabs</h2>
        <div class="brands">
            <img src="{{ asset('images/Unsplash.png') }}" alt="Unsplash">
            <img src="{{ asset('images/Notion.png') }}" alt="Notion">
            <img src="{{ asset('images/Intercom.png') }}" alt="Intercom">
            <img src="{{ asset('images/Descript.png') }}" alt="Descript">
            <img src="{{ asset('images/Grammarly.png') }}" alt="Grammarly">
        </div>
    </section>

    <!-- Support Section -->
    <section class="support">
        <div class="support-left">
            <h2>How we support our<br> partner all over the world</h2>
            <p>
                SaaS become a common delivery model for many business applications,
                including office software, messaging software, payroll processing software,
                DBMS software, management software.
            </p>
            <div class="ratings">
                <div class="rating">
                    <div class="stars">★★★★★</div>
                    <span>4.9 / 5 rating</span>
                    <p>databricks</p>
                </div>
                <div class="rating">
                    <div class="stars">★★★★☆</div>
                    <span>4.8 / 5 rating</span>
                    <p>Chainalysis</p>
                </div>
            </div>
        </div>
        <div class="support-right">
            <div class="feature">
                <img src="{{ asset('images/publishing.png') }}" alt="Publishing" class="feature-icon">
                <div class="feature-text">
                    <h3>Publishing</h3>
                    <p>
                        Plan, collaborate, and publishing your content that drives
                        meaningful engagement and growth for your brand.
                    </p>
                </div>
            </div>

            <div class="feature">
                <img src="{{ asset('images/ana.png') }}" alt="Analytics" class="feature-icon">
                <div class="feature-text">
                    <h3>Analytics</h3>
                    <p>
                        Analyze your performance and create gorgeous reports.
                    </p>
                </div>
            </div>

            <div class="feature">
                <img src="{{ asset('images/engagement.png') }}" alt="Engagement" class="feature-icon">
                <div class="feature-text">
                    <h3>Engagement</h3>
                    <p>
                        Quickly navigate you and engage with your audience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="features-header">
            <h2>Our Features you cab get</h2>
            <p>
                We offer a variety of interesting features that you can help increase
                your productivity at work and manage your projrct esaly
            </p>
            <a href="#" class="btn-get-started">Get Started</a>
        </div>

        <div class="features-cards">
            <!-- Card 1 -->
            <div class="feature-card">
                <img src="{{ asset('images/col.png') }}" alt="Collaboration Teams">
                <h3>Collaboration Teams</h3>
                <p>
                    Here you can handle projects together with team virtually
                </p>
            </div>

            <!-- Card 2 (utama) -->
            <div class="feature-card main-card">
                <img src="{{ asset('images/clo.png') }}" alt="Cloud Storage">
                <h3>Cloud Storage</h3>
                <p>
                    No nedd to worry about storage because we provide storage up to 2 TB
                </p>
            </div>

            <!-- Card 3 -->
            <div class="feature-card">
                <img src="{{ asset('images/daily.png') }}" alt="Daily Analytics">
                <h3>Daily Analytics</h3>
                <p>
                    We always provide useful information to make it easier for you every day
                </p>
            </div>
        </div>
    </section>

    <section class="benefit-section">
        <div class="container">
            <div class="benefit-content">
                <div class="benefit-text">
                    <h2 class="benefit-title">What Benifit Will You Get</h2>
                    <ul class="benefit-list">
                        <li>
                            <span class="icon-check">&#10003;</span>
                            Free Consulting With Expert Saving Money
                        </li>
                        <li>
                            <span class="icon-check">&#10003;</span>
                            Online Banking
                        </li>
                        <li>
                            <span class="icon-check">&#10003;</span>
                            Investment Report Every Month
                        </li>
                        <li>
                            <span class="icon-check">&#10003;</span>
                            Saving Money For The Future
                        </li>
                        <li>
                            <span class="icon-check">&#10003;</span>
                            Online Transaction
                        </li>
                    </ul>
                </div>

                <div class="benefit-image">
                    {{-- Tambahkan gambar di sini --}}
                    <img src="{{ asset('images/benefit.png') }}" alt="Benefit Image">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-section">
        <div class="pricing-container">
            <h2 class="pricing-title">Choose Plan That’s Right For You</h2>
            <p class="pricing-subtitle">Choose plan that works best for you, feel free to contact us</p>

            <div class="billing-toggle">
                <button class="btn-toggle active">Bil Monthly</button>
                <button class="btn-toggle">Bil Yearly</button>
            </div>

            <div class="pricing-cards">
                <!-- Free Plan -->
                <div class="pricing-card">
                    <h3 class="plan-title">Free</h3>
                    <p class="plan-subtitle">Have a go and test your superpowers</p>
                    <p class="plan-price">$0</p>
                    <ul class="plan-features">
                        <li>2 Users</li>
                        <li>2 Files</li>
                        <li>Public Share & Comments</li>
                        <li>Chat Support</li>
                        <li>New income apps</li>
                    </ul>
                    <a href="#" class="btn-plan free">Signup for free</a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card pro">
                    <h3 class="plan-title">Pro</h3>
                    <p class="plan-subtitle">Experiment the power of infinite possibilities</p>
                    <p class="plan-price">$8 <span class="save">Save $50 a year</span></p>
                    <ul class="plan-features">
                        <li>4 Users</li>
                        <li>All apps</li>
                        <li>Unlimited editable exports</li>
                        <li>Folders and collaboration</li>
                        <li>All incoming apps</li>
                    </ul>
                    <a href="#" class="btn-plan pro-btn">Go to pro</a>
                </div>

                <!-- Business Plan -->
                <div class="pricing-card">
                    <h3 class="plan-title">Business</h3>
                    <p class="plan-subtitle">Unveil new superpowers and join the Design League</p>
                    <p class="plan-price">$16</p>
                    <ul class="plan-features">
                        <li>All the features of pro plan</li>
                        <li>Account success Manager</li>
                        <li>Single Sign-On (SSO)</li>
                        <li>Co-conception program</li>
                        <li>Collaboration-Soon</li>
                    </ul>
                    <a href="#" class="btn-plan business">Goto Business</a>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-section">
        <div class="footer-container">
            <div class="testimonial">
                <h2>People are Saying About DoWhith</h2>
                <p class="desc">Everything you need to accept to payment and grow your money of manage anywhere on planet</p>
                <blockquote>
                    I am very helped by this E-wallet application, my days are very easy to use this application and its very helpful in my life, even I can pay a short time 😊
                </blockquote>
                <p class="author">– Aria Zinanrio</p>
                <div class="avatars">
                    <img src="{{ asset('images/user1.png') }}" alt="user">
                    <img src="{{ asset('images/user2.png') }}" alt="user">
                    <img src="{{ asset('images/user3.png') }}" alt="user">
                    <img src="{{ asset('images/user4.png') }}" alt="user">
                    <img src="{{ asset('images/user5.png') }}" alt="user">
                </div>
            </div>

            <div class="form-box">
                <div class="icon"></div>
                <h3>Login</h3>

                {{-- ✅ Tambahin pesan sukses kalau login berhasil --}}
                @if(session('success'))
                <div style="color: green; margin-bottom: 15px;">
                    {{ session('success') }}
                </div>
                @endif

                {{-- ✅ Tambahin pesan error kalau login gagal --}}
                @if($errors->any())
                <div style="color: red; margin-bottom: 15px;">
                    {{ $errors->first() }}
                </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" required>

                    <button type="submit" class="btn-request">Login</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="newsletter">
                <h4>Biccas</h4>
                <p>Get started now try our product</p>
                <div class="newsletter-box">
                    <input type="email" placeholder="Enter your email here">
                    <button type="submit">➔</button>
                </div>
            </div>

            <div class="footer-links">
                <div>
                    <h5>Support</h5>
                    <ul>
                        <li>Help centre</li>
                        <li>Account information</li>
                        <li>About</li>
                        <li>Contact us</li>
                    </ul>
                </div>
                <div>
                    <h5>Help and Solution</h5>
                    <ul>
                        <li>Talk to support</li>
                        <li>Support docs</li>
                        <li>System status</li>
                        <li>Covid responde</li>
                    </ul>
                </div>
                <div>
                    <h5>Product</h5>
                    <ul>
                        <li>Update</li>
                        <li>Security</li>
                        <li>Beta test</li>
                        <li>Pricing product</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-credits">
            <p>© 2022 Biccas Inc. Copyright and rights reserved</p>
            <p>Terms and Conditions • Privacy Policy</p>
        </div>
    </section>







</body>

</html>