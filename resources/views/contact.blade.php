@extends('layouts.master', [
    'titre' => 'Apropos',
    'sousTitre' => 'Nos contacts',
    'sousTitreOne' => 'Contacts',
])

@section('content')
    <!-- Start Contact Us Area -->
    <section class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center">
                    <div class="contact-form">
                        <h2>Entrer en contact</h2>
                        <form id="" action="#" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input required="required" type="text" name="name" placeholder="Votre nom">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input required="required" type="email" name="email" placeholder="Votre e-mail">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="text" required="required" name="phone" placeholder="Votre téléphone">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-input">
                                        <input type="text" required="required" name="subject"
                                            placeholder="Votre sujets">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input">
                                        <textarea name="message" required="required" placeholder="Écrire un message" spellcheck="false"></textarea>
                                        <i class="fas fa-pen"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit">Envoyer un message</button>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
                <div class="col-lg-4 align-self-center">
                    <div class="contact-form-info" style="background-image:url('assets/img/contact.jpg');">
                        <h2>N'hésitez pas à nous contacter</h2>
                        <div class="contact-info-list">
                            <div class="item mb-20">
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <h4>Emplacements</h4>
                                    <p>Abidjan Cocody, 7ième tranche MAHIKARI vers le pont Soro, lot n°223 îlot 2626, 1er étage.</p>
                                </div>
                            </div>
                            <div class="item mb-20">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Envoyer un mail</h4>
                                    <p>info@luximmo.com</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Appelez-nous</h4>
                                    <p>+225 27 22 35 65 14</p>
                                    <p>+225 05 03 62 36 64</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Us Area -->
@endsection
