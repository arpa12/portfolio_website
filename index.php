<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arpa Nihan-Portfolio</title>
  <link rel="stylesheet" href="css/main.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body class="bg-color-primary text-color-white tracking-wider">
  <header class="sticky top-0 z-10">
    <nav class="container flex justify-between items-center bg-color-primary">
      <div class="py-5 text-color-secondary font-bold text-3xl sticky top">
        <a href="#home"> <span class="text-color-white">Arpa</span>Nihan </a>
      </div>
      <div>
        <ul class="hidden lg:flex items-center space-x-6">
          <li>
            <a
              href="#home"
              class="hover:text-color-secondary ease-in duration-200">Home</a>
          </li>
          <li>
            <a
              href="#about"
              class="hover:text-color-secondary ease-in duration-200">About Me</a>
          </li>
          <li>
            <a
              href="#service"
              class="hover:text-color-secondary ease-in duration-200">Services</a>
          </li>
          <li>
            <a
              href="#link"
              class="hover:text-color-secondary ease-in duration-200">Social Links</a>
          </li>
          <li>
            <a
              href="#contact"
              class="hover:text-color-secondary ease-in duration-200">Contact Me</a>
          </li>
          <li>
            <a
              href="./arpanihan_resume.pdf"
              class="bg-color-secondary p-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 w-full"
              target="_blank">View My Resume</a>
          </li>

          <li>
            <a
              download=""
              href="./arpanihan_resume.pdf"
              class="bg-color-secondary p-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 w-full"
              target="_blank">Download My Resume</a>
          </li>
        </ul>
      </div>

      <!-- Mobile Screen -->
      <div id="hamburger" class="lg:hidden cursor-pointer z-50">
        <i class="fa-solid fa-bars"></i>
      </div>
      <div
        id="menu"
        class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
        <ul class="h-full grid place-items-center py-20">
          <li>
            <a
              id="hlink"
              href="#home"
              class="hover:text-color-secondary ease-in duration-200">Home</a>
          </li>
          <li>
            <a
              id="hlink"
              href="#about"
              class="hover:text-color-secondary ease-in duration-200">About Me</a>
          </li>
          <li>
            <a
              id="hlink"
              href="#service"
              class="hover:text-color-secondary ease-in duration-200">Services</a>
          </li>
          <li>
            <a
              id="hlink"
              href="#contact"
              class="hover:text-color-secondary ease-in duration-200">Contact Me</a>
          </li>
          <li>
            <a
              href="./arpanihan_resume.pdf"
              class="hover:text-color-secondary ease-in duration-200"
              target="_blank">View My Resume</a>
          </li>

          <li>
            <a
              download=""
              href="./arpanihan_resume.pdf"
              class="hover:text-color-secondary ease-in duration-200"
              target="_blank">Download My Resume</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <section id="home" class="relative">
      <div
        class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div
        class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div class="container py-20">
        <div class="grid grid-cols-2 items-center w-full z-20 space-x-2">
          <div class="text-center mb-12 md:text-left md:pr-10 ml-10 mt-20">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
              Welcome to
              <span class="text-color-secondary"> Arpa Nihan's </span>World
            </h1>
            <p class="leading-relaxed mt-12">
              Hi, this is Arpa Nihan. Welcome to my portfolio website. In this
              website, you will know about me and my services which I provide
              and also can download my resume if you want.
            </p>
          </div>

          <div>
            <img src="./img/image1.png" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="bg-color-primary-light">
      <div class="container py-20">
        <div class="text-center m-auto mb-10">
          <h2 class="font-bold text-color-secondary text-4xl">About Me</h2>

          <p class="mt-16">
          A dedicated Computer Science and Engineering B.Sc. graduate from Daffodil
International University, currently advancing my career as a Software Quality
Assurance (SQA) Engineer at Business Automation Ltd. I bring a diverse
background with 2 years of experience as an English Teacher at Lightship and
as the Co-Founder of 100 Million Mindset Organization, where I specialized in
Graphic Design for 3 years, and Web Design and WordPress Development for
2 years. My proven ability to collaborate effectively with a wide range of
international and local clients is complemented by strong communication and
project management skills.
          </p>
        </div>
      </div>
    </section>

    <section id="service" class="relative">
      <div
        class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div
        class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div class="container py-20">
        <div class="text-center m-auto mb-20">
          <h2 class="font-bold text-color-secondary text-4xl">Services</h2>
        </div>

        <div
          class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
          <!-- card no 1 -->
          <div class="border border-solid border-color-secondary rounded-lg">
            <div>
              <h2
                class="text-center text-xl bg-color-secondary rounded-lg p-2">
                Website Development (Front-End)
              </h2>
              <p class="text-center p-5">
                "Welcome to my portfolio website! I am a front-end developer
                proficient in HTML, CSS, Tailwind CSS, JavaScript, TypeScript,
                React, Redux, and Next.js. With these languages and
                frameworks, I have the ability to create visually stunning and
                interactive web applications. Let's explore my projects and
                see how I leverage my skills to craft engaging user
                experiences and deliver innovative solutions."
              </p>
            </div>
          </div>

          <!-- card no 2 -->
          <div class="border border-solid border-color-secondary rounded-lg">
            <div>
              <h2
                class="text-center text-xl bg-color-secondary rounded-lg p-2">
                Wordpress Customization
              </h2>
              <p class="text-center p-5">
                "I am a skilled WordPress developer specializing in
                customizing websites with themes, plugins, and the Elementor
                page builder. With my expertise, I can bring your vision to
                life and create a unique online presence that captures your
                brand's essence. Let's collaborate to design and develop a
                WordPress-powered website that showcases your work and leaves
                a lasting impression."
              </p>
            </div>
          </div>

          <!-- card no 3 -->
          <div class="border border-solid border-color-secondary rounded-lg">
            <div>
              <h2
                class="text-center text-xl bg-color-secondary rounded-lg p-2">
                SQA Engineer (Manual Testing)
              </h2>
              <p class="text-center p-5">
                "As an SQA Engineer specializing in Manual Testing, I ensure
                that your software and web applications meet the highest
                standards of quality and functionality. With a meticulous
                approach, I perform comprehensive testing across various
                scenarios to identify and resolve bugs, enhance usability, and
                ensure that the final product is error-free and user-friendly.
                My goal is to deliver robust, reliable, and high-performing
                applications that exceed your expectations."
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="link" class="bg-color-primary-light">
      <div class="container py-20">
        <div class="flex flex-col items-center mb-6">
          <h2 class="font-bold text-color-secondary text-4xl mb-2">
            Find Me With One Click
          </h2>
          <hr class="w-1/4 mx-auto border-t-2 border-color-secondary my-4" />
          <div class="space-x-4">
            <button
              class="btn rounded-full bg-color-secondary pl-5 pr-5 pt-2 pb-2 font-bold hover:opacity-80 ease-in duration-200">
              <a
                href="https://www.linkedin.com/in/arpa-nihan-4080771a0/"
                target="_blank">LinkedIn</a>
            </button>
            <button
              class="btn rounded-full bg-color-secondary pl-5 pr-5 pt-2 pb-2 font-bold hover:opacity-80 ease-in duration-200">
              <a href="https://www.fiverr.com/arpa12567" target="_blank">Fiverr</a>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="relative">
      <div
        class="w-80 h-80 bg-color-blob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div
        class="w-80 h-80 bg-color-secondary absolute bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full"></div>

      <div class="container py-20">
        <div class="text-center m-auto mb-20">
          <h2 class="font-bold text-color-secondary text-4xl">Contact Me</h2>
        </div>

        <form action="send.php" method="post">
  <div class="w-full m-auto text-center md:w-2/3">
    <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
      <input
        id="name"
        type="text"
        name="name"
        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
        placeholder="Name"
        required />
      <input
        id="email"
        type="email"
        name="email"
        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
        placeholder="Email"
        required />
      <input
        id="number"
        type="tel"
        name="number"
        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
        placeholder="Phone"
        required />
      <input
        id="company"
        type="text"
        name="company"
        class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
        placeholder="Company"
        required />
    </div>
    <textarea
      id="message"
      name="message"
      rows="4"
      class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
      placeholder="Message"
      required></textarea>
    <button type="submit" name="submitContact"
      class="btn mt-10 bg-color-secondary p-3 rounded-lg">
      Send Message
    </button>
  </div>
</form>

      </div>
    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>

    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if(messageText != ''){
      Swal.fire({
      icon: "success",
      title: "Thank You"
    });

    <?php unset($_SESSION['status']); ?>


  }
  </script>

</body>
<footer class="bg-color-primary-dark text-center p-3">
  <p>arpa-nihan&copy;portfolio website 2023</p>
</footer>

</html>