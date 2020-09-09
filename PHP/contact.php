<?php
    require '_nf-admin/_header.php';
    require '_nf-admin/_dbconnect.php';

    $submit = false;
    $err = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        if (!empty($name) && ($email) && ($msg)) {
            $sql = "INSERT INTO `feedback` (`name`, `email`, `msg`, `timestamp`) VALUES ('$name', '$email', '$msg', current_timestamp())";
            
            $result = mysqli_query($connect , $sql);
            if ($result) {
                $submit = true;
            }else{
                $err = true;
            }
        }else{
            $err = true;
        }
    }
?>

<div class="container mx-auto flex md:flex-row flex-col items-center">
    <img class="object-cover object-center rounded" alt="hero" width="1300rem"
        src="https://source.unsplash.com/3000x800/?computer">
</div>



<section class="text-gray-700 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-no-wrap flex-wrap">
        <div
            class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe class="absolute inset-0" style="filter: grayscale(1) contrast(1.2) opacity(0.4);" title="map"
                marginheight="0" marginwidth="0" scrolling="no"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235014.25791867872!2d72.43965739889806!3d23.02018176433162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1599631356418!5m2!1sen!2sin"
                width="100%" height="100%" frameborder="0"></iframe>

            <div class="bg-white relative flex flex-wrap py-6">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">ADDRESS</h2>
                    <p class="leading-relaxed">NorthFox Group , 4 Bhoomi Aprt. Motera , Ahmedabad - 380005.
                    </p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">EMAIL</h2>
                    <a href="mailto:NorthFoxGroup@hotmail.com" class="text-red-500 leading-relaxed"
                        target="_blank">NorthFoxGroup@hotmail.com</a>
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mt-4">PHONE</h2>
                    <a href="tel:9106693088">
                        <p class="leading-relaxed">910 66 930 88</p>
                    </a>
                </div>
            </div>
        </div>

        <form action="contact.php" method="POST">

            <div class="bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-5 font-large title-font">Feedback</h2>
                
                <?php
                    if ($err) {
                        echo '<span class="mb-5 text-white font-bold bg-orange-500 px-5 py-2 rounded">Error :( <span
                        class="font-normal">Enter Valid Feedback...</span>
                        </span>';
                    }
                    if ($submit) {
                        echo '<span class="mb-5 text-white font-bold bg-green-600 px-5 py-2 rounded">Submit :) <span
                        class="font-normal">We will contact you in sometime...</span>
                        </span>';
                    }
                ?>
                
                <input name="name"
                    class="bg-white rounded border border-gray-400 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4"
                    placeholder="Name" type="text">
                <input name="email"
                    class="bg-white rounded border border-gray-400 focus:outline-none focus:border-red-500 text-base px-4 py-2 mb-4"
                    placeholder="Email" type="email">
                <textarea name="msg"
                    class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-red-500 text-base px-4 py-2 mb-4 resize-none"
                    placeholder="Message"></textarea>
                <button
                    class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                    artisan.</p>
            </div>
        </form>
    </div>
</section>


<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
            <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-xl mb-2 text-gray-900">Moon hashtag pop-up try-hard offal
                    truffaut</h1>
                <div class="leading-relaxed">Pour-over craft beer pug drinking vinegar live-edge gastropub, keytar
                    neutra sustainable fingerstache kickstarter.</div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                <p class="leading-relaxed">Users</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">1.8K</h2>
                <p class="leading-relaxed">Subscribes</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">35</h2>
                <p class="leading-relaxed">Downloads</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-3xl text-gray-900">4</h2>
                <p class="leading-relaxed">Products</p>
            </div>
        </div>
        <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
            <img class="object-cover object-center w-full h-full" src="https://source.unsplash.com/600x300/?computer"
                alt="stats">
        </div>
    </div>
</section>

<section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Service Team</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn
                asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.
            </p>
        </div>
        <div class="flex flex-wrap -m-2">
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/80x80">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                        <p class="text-gray-500">UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/84x84">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
                        <p class="text-gray-500">CTO</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/88x88">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                        <p class="text-gray-500">Founder</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/90x90">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                        <p class="text-gray-500">DevOps</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/94x94">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
                        <p class="text-gray-500">Software Engineer</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/98x98">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
                        <p class="text-gray-500">UX Researcher</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/100x90">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
                        <p class="text-gray-500">QA Engineer</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/104x94">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
                        <p class="text-gray-500">System</p>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                    <img alt="team"
                        class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                        src="https://dummyimage.com/108x98">
                    <div class="flex-grow">
                        <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
                        <p class="text-gray-500">Product Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
  require '_nf-admin/_footer.php';
?>