<div class="sect-porto-bg">
    <div class="vp-porto-container">
        <div class="vp-porto-title">
            <h2>Portofolio</h2>
            <div class="vp-porto-desc">Beberapa contoh hasil karya terbaik kami dalam membantu bisnis membuat video terbaiknya</div>
        </div>

        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="gallery-filter">
                        <span class="filter-item active" data-filter="all">Semua</span>
                        <span class="filter-item" data-filter="medsos">Medsos</span>
                        <span class="filter-item" data-filter="wedding">Wedding</span>
                        <span class="filter-item" data-filter="compro">Company</span>
                        <span class="filter-item" data-filter="event">Event</span>
                    </div>
                </div>
                <div class="row">

                    <div class="gallery-item medsos">
                        <div class="gallery-item-inner">
                            <img src="https://bicreative.id/wp-content/uploads/2024/02/Thumbnail-Konten-Sosmed.webp" alt="medsos">
                        </div>
                    </div>

                    <div class="gallery-item event">
                        <div class="gallery-item-inner">
                            <img src="https://bicreative.id/wp-content/uploads/2024/02/Thumbnail-Event-Dance_.webp" alt="event">
                        </div>
                    </div>

                    <div class="gallery-item wedding">
                        <div class="gallery-item-inner">
                            <img src="https://bicreative.id/wp-content/uploads/2024/02/Thumbnail-Wedding.webp" alt="wedding">
                        </div>
                    </div>

                    <div class="gallery-item compro">
                        <div class="gallery-item-inner">
                            <img src="https://bicreative.id/wp-content/uploads/2024/02/Thumbnail-Compro.webp" alt="compro">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            const filterContainer = document.querySelector(".gallery-filter"),
                galleryItems = document.querySelectorAll(".gallery-item");

            filterContainer.addEventListener("click", (event) => {
                if (event.target.classList.contains("filter-item")) {
                    filterContainer.querySelector(".active").classList.remove("active");
                    event.target.classList.add("active");
                    const filterValue = event.target.getAttribute("data-filter");
                    galleryItems.forEach((item) => {
                        if (item.classList.contains(filterValue) || filterValue === 'all') {
                            item.classList.remove("hide");
                            item.classList.add("show");
                        } else {
                            item.classList.remove("show");
                            item.classList.add("hide");
                        }
                    });
                }
            });
        </script>
    </div>
</div>