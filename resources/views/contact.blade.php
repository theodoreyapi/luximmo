@extends('layouts.master', [
    'titre' => 'Apropos',
    'sousTitre' => 'Nos contacts',
    'sousTitreOne' => 'Contacts',
])

@section('content')
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: #f8f9fa;
            color: #222;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            color: #1a1a2e;
            letter-spacing: 1px;
        }
        a {
            color: #0d6efd;
            transition: color 0.2s;
        }
        a:hover {
            color: #ff6f61;
            text-decoration: none;
        }
        .contact-form {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 32px 24px;
            margin-bottom: 32px;
        }
        .contact-form h2 {
            color: #ff6f61;
            font-size: 2rem;
            margin-bottom: 18px;
        }
        .single-input {
            position: relative;
            margin-bottom: 18px;
        }
        .single-input input,
        .single-input textarea {
            width: 100%;
            border: 1.5px solid #e0e0e0;
            border-radius: 12px;
            padding: 12px 40px 12px 16px;
            font-size: 1rem;
            background: #f8f9fa;
            transition: border 0.2s;
            resize: none;
        }
        .single-input input:focus,
        .single-input textarea:focus {
            border: 1.5px solid #0d6efd;
            outline: none;
            background: #fff;
        }
        .single-input i {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #0d6efd;
            font-size: 1.1rem;
        }
        .contact-form button[type="submit"] {
            background: linear-gradient(135deg, #0d6efd 0%, #ff6f61 100%);
            color: #fff;
            border: none;
            border-radius: 24px;
            padding: 12px 36px;
            font-size: 1.1rem;
            font-weight: 700;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            transition: background 0.2s, transform 0.2s;
            margin-top: 8px;
        }
        .contact-form button[type="submit"]:hover {
            background: linear-gradient(135deg, #ff6f61 0%, #0d6efd 100%);
            transform: scale(1.05);
        }
        .contact-form-info {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 32px 24px;
            background-size: cover;
            background-position: center;
            color: #222;
        }
        .contact-form-info h2 {
            color: #0d6efd;
            font-size: 1.5rem;
            margin-bottom: 18px;
        }
        .contact-info-list .item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 18px;
        }
        .contact-info-list .icon {
            font-size: 1.7rem;
            color: #ff6f61;
            margin-top: 2px;
        }
        .contact-info-list .content h4 {
            margin-bottom: 4px;
            color: #0d6efd;
            font-size: 1.1rem;
            font-weight: 700;
        }
        .contact-info-list .content p {
            margin-bottom: 0;
            font-size: 1rem;
        }
        @media (max-width: 991px) {
            .contact-form, .contact-form-info {
                padding: 18px 8px;
            }
        }
    </style>
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
