<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            "name" => "Glass Shower Cubicles",
            "image" => "glass-shower-cubicles.jpg",
            "icon" => "bi bi-cart",
            "description" => "
                <section id='about'>
                    <div class='row'>
                            <h2>Why Choose Glass Shower Cubicles?</h2>
                            <ul>
                                <li><strong>Elegance and Aesthetics:</strong> Our glass shower cubicles add a touch of sophistication to your bathroom.</li>
                                <li><strong>Space Optimization:</strong> Glass creates an illusion of space, making even small bathrooms appear larger.</li>
                                <li><strong>Easy Maintenance:</strong> Glass is easy to clean and maintain, ensuring your shower cubicle remains sparkling.</li>
                                <li><strong>Durability:</strong> Our high-quality glass is durable and built to last, adding value to your home.</li>
                            </ul>
                    </div>
                </section>
        
                <section id='services' class='mt-3'>
                    <h2>Our Services</h2>
                    <div class='row'>
                            <h3>Custom Design and Installation</h3>
                            <p>We work closely with you to understand your preferences and space constraints, offering tailor-made solutions.</p>
                            <h3>Professional Installation</h3>
                            <p>Our team of experienced installers ensures a seamless and hassle-free installation process. We prioritize precision and attention to detail.</p>
                    </div>
                    <div class='row'>
                            <h3>Replacement and Repairs</h3>
                            <p>Is your existing shower cubicle showing signs of wear and tear? We offer prompt and efficient replacement and repair services.</p>
                            <h3>Consultation and Estimates</h3>
                            <p>Schedule a consultation with our experts. We provide detailed estimates and guide you through the entire process.</p>
                    </div>
                </section>
            ",
        ]);        
        Service::create([
            "name" => "Glass Balcony",
            "image"=>"glass-balcony.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
            <div class='row'>
                    <p>
                        We specialize in providing top-notch glass balcony installation services that seamlessly blend aesthetics with functionality.
                        With years of expertise in the industry, we take pride in transforming ordinary spaces into extraordinary ones, adding value to your property and elevating your lifestyle.
                    </p>    
                    <h2>Our Services</h2>
    
                    <h3>Custom Glass Balcony Design</h3>
                    <p>
                        Our team of skilled professionals works closely with you to bring your vision to life. Whether you prefer a sleek modern design or a classic look, we tailor our services to meet your unique style and requirements.
                        Customization is at the heart of what we do, ensuring your glass balcony is a perfect reflection of your taste and preferences.
                    </p>
    
                    <!-- Add more service details as needed -->
            </div>
    
            <div class='row'>
                    <h3>Precision Installation</h3>
                    <p>
                        We understand the importance of precision when it comes to glass balcony installations. Our experienced installers use state-of-the-art techniques and high-quality materials to ensure a flawless finish.
                        Safety is our priority, and we adhere to industry standards to guarantee the structural integrity of your glass balcony.
                    </p>    
                    <h3>Glass Options</h3>
                    <p>
                        Choose from a variety of glass options to suit your needs. From clear glass for unobstructed views to frosted glass for added privacy, we offer a range of choices that cater to both aesthetic and functional considerations.
                    </p>
            </div>
    
            <div class='row'>
                    <h3>Maintenance and Repairs</h3>
                    <p>
                        Our commitment doesn’t end with installation. We provide ongoing maintenance services to keep your glass balcony in pristine condition. In case of any issues, our prompt and reliable repair services ensure that your investment is well-protected.
                    </p>
            </div>
    
            <div class='row'>
                    <h2>Get in Touch</h2>
                    <p>
                        Ready to elevate your living space with a stunning glass balcony? Contact us today for a consultation. Let’s turn your dream balcony into a reality.
                    </p>
    
                    <!-- Add your contact information and form if necessary -->
            </div>
            "
        ]);
        Service::create([
            "name" => "Glass Stairways",
            "image"=>"glass-stair-best.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
            <div class='row'>
            <div class='col-md-12>
                <div class='jumbotron'>
                    <h2>Elevate Your Space with Stunning Glass Stairways</h2>
                    <p class='lead'>
                        We specialize in transforming spaces with the elegance and modernity
                        of glass stairways. Our expert team brings innovation and precision to every installation,
                        ensuring that your staircase becomes a focal point of beauty and sophistication.
                    </p>
                </div>

                <h3>Why Choose Glass Stairways?</h3>

                <div class='row'>
                    <div class='col-md-12'>
                        <p>
                            <strong class='text-info'>1. Contemporary Design:</strong> Our glass stairways are
                            designed to add a touch of contemporary style to any space.
                        </p>
                        <p>
                            <strong class='text-info'>2. Unmatched Transparency:</strong> Enjoy the feeling of
                            openness and spaciousness with our transparent glass stairways.
                        </p>
                    </div>
                    <div class='col-md-12'>
                        <p>
                            <strong class='text-info'>3. Customization Options:</strong> Tailor your glass stairway to
                            fit your unique style and preferences.
                        </p>
                        <p>
                            <strong class='text-info'>4. Durability and Safety:</strong> Our glass stairways are not
                            just about aesthetics – they are built to last.
                        </p>
                    </div>
                </div>

                <h3>Our Services</h3>

                <div class='row'>
                    <div class='col-md-12'>
                        <p>
                            <strong class='text-success'>1. Design Consultation:</strong> Our experienced design team
                            will work closely with you to understand your vision and preferences.
                        </p>
                    </div>
                    <div class='col-md-12'>
                        <p>
                            <strong class='text-success'>2. Installation Expertise:</strong> Our skilled installation
                            team ensures a seamless and efficient installation process.
                        </p>
                    </div>
                    <div class='col-md-12'>
                        <p>
                            <strong class='text-success'>3. Maintenance and Repairs:</strong> Our commitment doesn't
                            end with installation. We offer maintenance services to keep your glass stairway looking as
                            good as new.
                        </p>
                    </div>
                </div>

                <h3>Get Started Today!</h3>

                <p>
                    Ready to elevate your space with a breathtaking glass stairway? Contact us today for a consultation.
                    Let AfriGlass & Aluminium be your partner in creating a staircase that not only connects levels but
                    also adds a touch of sophistication to your environment.
                </p>

            </div>
        </div>
            "
        ]);
        Service::create([
            "name" => "Glass Canopies",
            "image"=>"glass-canopy.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
                <h2>Elevate Your Space with Stylish Glass Canopies</h2>
    
                <p>We specialize in transforming spaces with elegant and functional glass canopies. Whether you are a homeowner looking to add a touch of sophistication to your entrance or a business owner aiming to create a welcoming atmosphere, our expert team is here to bring your vision to life.</p>
            <div class='mt-4'>
                <div class='mt-3'>
                    <h3>1. Residential Glass Canopies</h3>
                    <p>Enhance the curb appeal of your home with our custom-designed residential glass canopies. Our team collaborates with you to create a canopy that not only protects your entryway but also adds a unique architectural element to your home.</p>
    
                </div>
    
                <div class='mt-3'>
    
                    <h3>2. Commercial Glass Canopies</h3>
                    <p>Make a lasting impression on your clients and customers with our sleek and modern commercial glass canopies. From storefronts to office entrances, our canopies are crafted to seamlessly blend aesthetics with functionality.</p>
    
                </div>
    
                <div class='mt-3'>
    
                    <h3>3. Custom Design and Installation</h3>
                    <p>No two projects are the same, and at [Your Company Name], we understand the importance of customization. Our design team works closely with you to create a tailor-made glass canopy that suits your style, preferences, and practical needs.</p>
    
                </div>
    
                <div class='mt-3'>
    
                    <h3>4. Quality Materials</h3>
                    <p>We take pride in using high-quality materials to ensure durability and longevity. Our glass canopies are designed to withstand the elements while maintaining their beauty over time.</p>
    
                </div>
    
            </div>
    
            <div class='mt-4'>
    
                <h2>Get Started Today!</h2>
                <p>Ready to elevate your space with a stunning glass canopy? Contact us today for a consultation. We look forward to transforming your vision into a reality.</p>
    
            </div>
            "
        ]);
        Service::create([
            "name" => "Office Glass Partitions",
            "image"=>"office-glass-partitios.jpg",
            "icon"=>"bi bi-card-checklist",
            "description" => "
            <p class='lead'>Enhance Your Workspace with Elegant Glass Partitions</p>
    
            <div class='row'>
                <div class='col-md-12'>
                    <h3>Our Services</h3>
    
                    <ol>
                        <li class='list-group-item'>Custom Glass Partitions</li>
                        <li class='list-group-item'>Demountable Glass Partitions</li>
                        <li class='list-group-item'>Frameless Glass Walls</li>
                    </ol>
                </div>
    
                <div class='col-md-12'>
                    <h3>Why Choose Us?</h3>
    
                    <ul>
                        <li class='list-group-item'>Expertise</li>
                        <li class='list-group-item'>Customization</li>
                        <li class='list-group-item'>Quality Materials</li>
                        <li class='list-group-item'>Efficient Installation</li>
                    </ul>
                </div>
            </div>
    
            <p class='lead'>Let's Transform Your Office</p>
    
            <p>Ready to enhance your office space with elegant glass partitions? Contact us today for a consultation. We'll discuss your vision, assess your space, and provide a personalized plan that aligns with your goals.</p>
            "
        ]);
        Service::create([
            "name" => "Window Panes",
            "image"=>"window-panes.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
            <div class='row mt-4'>
                <div class='col-lg-12'>
                    <h2>Our Services</h2>
    
                    <h4>1. Window Panes Replacement</h4>
                    <p>Is your existing window showing signs of wear and tear? Upgrade to modern, energy-efficient window panes. Our skilled technicians specialize in seamless window panes replacement, ensuring a perfect fit and enhanced insulation for your space.</p>
    
                    <h4>2. New Window Installation</h4>
                    <p>Transform your space with our premium new window installation services. Whether you're building a new home or renovating an existing one, our experts will guide you through the selection process and install windows that complement your style while meeting the highest standards of quality.</p>
    
                    <h4>3. Energy-Efficient Solutions</h4>
                    <p>Save on energy costs with our energy-efficient window options. We offer a range of eco-friendly and technologically advanced window panes that not only enhance the comfort of your living or working space but also contribute to a greener environment.</p>
    
                    <h4>4. Customized Designs</h4>
                    <p>Express your unique style with our custom window pane designs. From classic to contemporary, our team works closely with you to create tailor-made solutions that perfectly match your vision and requirements.</p>
                </div>
            </div>
    
            <div class='row mt-12'>
                <div class='col-lg-12'>
                    <h2>Contact Us</h2>
                    <p>Ready to enhance the beauty and efficiency of your space? Contact us today for a consultation. Let our experts guide you through the process of choosing and installing the perfect window panes for your home or business.</p>
                    
                </div>
            </div>
            "
        ]);
        Service::create([
            "name" => "Mirrors and Glass Decoration",
            "image" => "mirrors-and-glass-decoration.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
            <header class='text-center mt-5'>
            <p class='lead'>Transforming Spaces with Mirrors and Glass Decoration</p>
        </header>

        <section class='my-5'>
            <h2>Our Services</h2>

            <div class='row'>
                <div class='col-md-12'>
                    <h3>Mirror Installations</h3>
                    <p>
                        Mirrors can do wonders in enhancing the aesthetics of any space. Our professional installation team is well-versed in placing mirrors strategically to maximize natural light, create the illusion of more space, and add a sense of sophistication to your interiors. From custom-sized mirrors to unique shapes and frames, we ensure a seamless and secure installation process.
                    </p>
                </div>

                <div class='col-md-12'>
                    <h3>Glass Decor Solutions</h3>
                    <p>
                        Elevate your space with our bespoke glass decor solutions. From glass partitions and shelving to custom glass tabletops, our team is committed to delivering functional and visually stunning designs. We work closely with our clients to understand their preferences and create personalized glass decor solutions that perfectly complement their style and space.
                    </p>
                </div>
            </div>
        </section>
        <section class='my-5'>
            <h2>Get in Touch</h2>

            <p>
                Ready to transform your space with our mirrors and glass decoration services? Contact us today for a consultation. Our friendly team is here to answer your questions, discuss your ideas, and provide you with a detailed quote.
            </p>
        </section>
            "
        ]);
        Service::create([
            "name" => "Alluminium Works",
            "image"=>"aluminium-works.jpg",
            "icon"=>"bi bi-cart",
            "description" => "
            <h1 class='text-center mb-4'>Aluminium Works Services</h1>

            <div class='row'>
                <div class='col-md-12'>
                    <h2>Our Services</h2>
                    
                    <h3>Aluminium Fabrication</h3>
                    <p>Our skilled team of artisans and technicians specialize in custom aluminium fabrication. From windows and doors to bespoke architectural elements, we bring your design concepts to life with precision and expertise.</p>
    
                    <h3>Aluminium Windows and Doors</h3>
                    <p>Enhance the aesthetics and functionality of your space with our premium aluminium windows and doors. We offer a wide range of styles and configurations, ensuring a perfect fit for residential, commercial, and industrial properties.</p>
    
                    <h3>Aluminium Cladding</h3>
                    <p>Upgrade the exterior of your building with our aluminium cladding solutions. Our cladding not only provides a sleek and modern appearance but also offers durability and weather resistance, protecting your property for years to come.</p>
                </div>
    
                <div class='col-md-12'>
                    <h3>Aluminium Railings and Balustrades</h3>
                    <p>Elevate the safety and style of your space with our aluminium railings and balustrades. Whether it's for a balcony, staircase, or terrace, our designs are tailored to meet both aesthetic and safety requirements.</p>
    
                    <h3>Aluminium Structural Glazing</h3>
                    <p>Transform your space with our aluminium structural glazing solutions. Our innovative designs and high-quality materials create a seamless connection between the indoors and outdoors, maximizing natural light and energy efficiency.</p>
                </div>
            </div>
            <p class='mt-4'>Discover the possibilities of aluminium with us. Contact us today to discuss your project and let us bring your ideas to life!</p>
            "
        ]);
        Service::create([
            "name" => "Stainless Steel Works",
            "image"=>"stainless-steel.jpg",
            "icon"=>"bi bi-calendar4-week",
            "description" => "
            <header class='text-center mt-5'>
            <h1>Expert Stainless Steel Works</h1>
        </header>

        <section class='my-5'>
            <div class='row'>
                <div class='col-md-12'>
                    <h2>Our Services</h2>

                    <div class='card'>
                        <div class='card-body'>
                            <h3 class='card-title'>Custom Stainless Steel Fabrication</h3>
                            <p class='card-text'>Transform your ideas into reality with our custom stainless steel fabrication services. Whether you need bespoke kitchen countertops, architectural elements, or industrial components, our skilled craftsmen are ready to bring your vision to life.</p>
                        </div>
                    </div>

                    <div class='card mt-3'>
                        <div class='card-body'>
                            <h3 class='card-title'>Stainless Steel Welding</h3>
                            <p class='card-text'>Precision is paramount when it comes to stainless steel welding. Our experienced welders utilize advanced techniques to ensure strong, durable, and aesthetically pleasing welds. From intricate designs to structural welds, we've got you covered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='my-5'>
            <h2>Portfolio</h2>
            <p>Explore our portfolio to witness the diverse range of projects we have successfully undertaken. From residential renovations to industrial installations, our work speaks for itself.</p>
        </section>

        <section class='my-5'>
            <h2>Contact Us</h2>
            <p>Ready to elevate your space with premium stainless steel works? Get in touch with us today to discuss your project, request a quote, or schedule a consultation. We look forward to partnering with you to create stainless steel masterpieces that stand out.</p>
        </section>
            "
        ]);
    }
}
