@extends('layouts.web.master.master')
@section('content')
<div id="influencer" data-spy="scroll" data-target="#influencer" class="site-section">
    
    <div class="container">
    <div class="row mb-5">
        <div class="col-md-6 ">
        <div class="site-section-heading" data-aos="fade-up" data-aos-delay="100">
            <h2>Learn the Basics of Web Design</h2>
        </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="mb-4 post-meta d-flex align-items-center">
            <div class="mr-2"><img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid" style="width: 40px;border-radius: 50%;"></div>
            <div><span>By <a href="#">Emely Peters</a></span> &mdash; <span>Sep. 10, 2019</span></div>
        </div>
        <p>When you're setting out to learn web design, the first thing you should remember is that designing
            websites is very
            similar to print design. The basics are all the same. You need to understand space and layout, how to
            handle fonts
            and colors, and put it all together in a way that delivers your message effectively.</p>
        <p>Let's take a look at the key elements that go into learning web design. This is a good resource for
            beginners, but
            even experienced designers may be able to hone some skills with this advice.</p>
        </div>
        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ url('/assets/images/n2.jpg') }}" alt="Image" class="img-fluid">
        </div>
    </div>
    <div class="col-md-12" data-aos="fade-up" data-aos-delay="200" style="padding-left: 35px;">
        <h5>01 - Elements of Good Design</h5>
        <p>
        Good web design is the same as good design in general. If you understand what makes something a good design,
        you'll
        be able to apply those rules to your websites.
        The most important elements in web design are good navigation, concise and effective pages, working links,
        and, most
        importantly, good grammar and spelling. Keep these things in mind as you add color and graphics and your
        website will
        be off to a great start.
        </p>
        <h5>02 - How to Layout a Web Page</h6>
        <p>
            Many people think that the layout of a web page is the design, and in many ways it is. The layout is the
            way
            the
            elements are positioned on the page, it is your foundation for images, text, navigation, etc.

            Many designers choose to do their layouts with CSS. It can also be used for elements like fonts, colors,
            and
            other
            custom styles. This helps ensure consistent and easy to manage features across your entire website.

            The best part of using CSS is that when you need to change something, you can just turn to the CSS and it
            changes on
            every page. It really is slick and learning to use CSS can end up saving you time and quite a few hassles.

            In today's online world, it's very important to consider responsive web design (RWD) as well. The primary
            focus of RWD
            is to change the layout depending on the width of the device viewing the page. Keep in mind that your
            visitors will be
            viewing it on desktops, phones, and tablets of all sizes, so this is more important than ever.

        </p>
        <h5>03 - Fonts and Typography</h5>
        <p>
            Fonts are the way your text looks on a web page. This is a vital element because most web pages include
            large
            amounts
            of text.

            When you're thinking of design, you need to think about how the text looks on a micro-level (the font
            glyphs,
            font
            family, etc.) as well as the macro-level (positioning blocks of text and adjusting the size and shape of
            the
            text).
            It's certainly not as simple as choosing a font and a few tips will help you get started.

        </p>
        <h5>04 - Your Website's Color Scheme</h6>
            <p>
            Color is everywhere. It's how we dress up our world and how we see things. Color has meaning beyond just
            "red" or
            "blue" and color is an important design element.

            If you think about it, every website has a color scheme. It adds to the brand identity of the site and
            flows
            into each
            page as well as other marketing materials. Determining your color scheme is a vital step in any design
            and
            should be
            considered carefully.

            </p>
            <h5>05 - Adding Graphics and Images</h5>
            <p>
            Graphics are the fun part of building web pages. As the saying goes "a picture is worth 1,000 words" and
            that's also
            true in web design. The internet is a very visual medium and eye-catching photos and graphics can really
            add
            to your
            user engagement.

            Unlike text, search engines have a difficult time telling what an image is of unless you give them that
            information.
            For that reason, designers can use IMG tag attributes like the ALT tag to include those important
            details.

            </p>
    </div>
    </div>
    
</div>
@endsection
