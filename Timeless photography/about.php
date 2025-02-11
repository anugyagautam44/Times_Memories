<?php $pageTitle = "About Us"; ?>
<?php include 'header.php'; ?>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900" id="aboutTitle">About Us</h1>
                <p class="text-xl text-gray-600 mt-4" id="aboutSubtitle">Learn more about our journey and what drives us</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <img alt="Photographer in Nepal" class="w-full h-full object-cover rounded-lg shadow-lg" src="https://img.freepik.com/free-photo/vertical-shot-silhouette-man-front-camera_181624-24735.jpg?ga=GA1.1.1044693573.1739263990&semt=ais_hybrid">
                </div>
                <div class="flex flex-col justify-center">
                    <p class="text-gray-700 mb-4" id="aboutContent1"></p>
                    <p class="text-gray-700" id="aboutContent2"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900">Meet the Team</h2>
                <p class="text-xl text-gray-600 mt-4">Our talented and dedicated team members.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center">
                    <img alt="Albert Hussain" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://img.freepik.com/free-photo/are-you-ready-compete-happy-bearded-young-male-looks-positively-makes-choice-points-selects-someone-who-stands-front-wears-casual-bright-t-shirt-isolated-white-wall_273609-16237.jpg?ga=GA1.1.1044693573.1739263990&semt=ais_hybrid">
                    <h3 class="text-2xl font-semibold text-gray-900">Albert Hussain</h3>
                    <p class="text-gray-600">Lead Photographer</p>
                </div>
                <div class="text-center">
                    <img alt="Ryan Smith" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://img.freepik.com/free-photo/close-up-handsome-young-man-showing-okay-sign-approve-agree-smiling-satisfied-standing-yellow-background_1258-41051.jpg?ga=GA1.1.1044693573.1739263990&semt=ais_hybrid">
                    <h3 class="text-2xl font-semibold text-gray-900">Ryan Smith</h3>
                    <p class="text-gray-600">Creative Director</p>
                </div>
                <div class="text-center">
                    <img alt="Kylie Jenner" class="w-48 h-48 object-cover rounded-full mx-auto mb-4" src="https://img.freepik.com/free-photo/beautiful-hispanic-woman-wearing-casual-clothes-looking-positive-happy-standing-smiling-with-confident-smile-showing-teeth_839833-14151.jpg?ga=GA1.1.1044693573.1739263990&semt=ais_hybrid">
                    <h3 class="text-2xl font-semibold text-gray-900">Kylie Jenner</h3>
                    <p class="text-gray-600">Photo Editor</p>
                </div>
            </div>
        </div>
    </section>

<script>
    // Load about content
    function loadAboutContent() {
        const about = JSON.parse(localStorage.getItem('about')) || {};
        
        // Update main content
        document.getElementById('aboutTitle').textContent = about.title || 'About Us';
        document.getElementById('aboutSubtitle').textContent = about.subtitle || 'Learn more...';
        document.getElementById('aboutContent1').textContent = about.content1 || 'Default content...';
        document.getElementById('aboutContent2').textContent = about.content2 || 'Default content...';
        
        // Update images
        const mainImg = document.querySelector('[alt="Photographer in Nepal"]');
        mainImg.src = `${about.images?.main || mainImg.src}?ts=${Date.now()}`;
        
        // Team images
        if(about.images?.team) {
            about.images.team.forEach((member, index) => {
                const img = document.querySelector(`[alt="${member.name}"]`);
                if(img) img.src = `${member.url}?ts=${Date.now()}`;
            });
        }
    }

    // Listen for updates
    window.addEventListener('storage', (e) => {
        if (e.key === 'aboutUpdate') {
            loadAboutContent();
        }
    });

    // Initial load
    loadAboutContent();
</script>

<?php include 'footer.php'; ?> 