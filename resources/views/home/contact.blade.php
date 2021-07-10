@extends('home.headerFooter')

@section('title')
 Contact
@endsection

@section('body')

    <header id="page-header"class="mt-2" style="background-image: url('{{ url('public/final_eagri/img/a.jpg')}}'); height:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto text-center text-light">
                    <h1>Contact Us</h1>
                    <p class="lead">Our Company Contact Info</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Contact Section -->
    <section id="contact" class="py-2">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form>
                            <h4 class="mb-4 text-center">Please fill out this form to contact us</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" name="phone" placeholder="Phone Number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea cols="30" rows="5" name="message" placeholder="Message" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn  btn-block btn-dark" value="Send">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Get In Touch</h4>
                            <p></p>
                            <h4>Address</h4>
                            <p>House #100, Uttara, Dhaka</p>
                            <h4>Email</h4>
                            <p>eagriculture@gmail.com</p>
                            <h4>Phone</h4>
                            <p class="mb-2">+8801989419776</p>
                            <p>+8801869084620</p>
                        </div>
                    </div>
                </div>
            </div>

       <div class="row">
           <div class="col-lg-12">
               <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.945448178661!2d91.90112830144764!3d24.89984233395701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054aeedc809bb%3A0x60b5f614c843a3bf!2sTilagor%2C%20Sylhet%2C%20Bangladesh!5e0!3m2!1sen!2sfi!4v1603751552543!5m2!1sen!2sfi"></a>
           </div>
       </div>
        </div>
    </section>

@endsection