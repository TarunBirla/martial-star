<header class="sticky top-0 z-50 border-b border-border bg-background/95 backdrop-blur-sm px-6 py-3">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        <a class="flex items-center gap-2 shrink-0" href="/">
            <span class="text-2xl">🥋</span>
            <span class="font-display text-xl font-bold text-gradient-primary tracking-wide">
                NEXTECK SPORTS
            </span>
        </a>

        <!-- NAV -->
        <nav id="mainMenu"
            class="hidden md:flex md:items-center gap-1 absolute md:static top-16 left-0 w-full md:w-auto bg-[#0F1115] md:bg-transparent flex-col md:flex-row p-6 md:p-0">

            <a class="menu-link active relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/">
                Dashboard
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

            <a class="menu-link relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/#profile">
                Profile
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

            <a class="menu-link relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/#analytics">
                Analytics
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

            <a class="menu-link relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/#sparring">
                Sparring
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

            <a class="menu-link relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/#achievements">
                Achievements
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

            <a class="menu-link relative px-3 py-1.5 text-xs font-display tracking-widest uppercase text-muted-foreground hover:text-foreground"
                href="/matches">
                Matches
                <div class="menu-active absolute bottom-0 left-3 right-3 h-0.5 bg-primary rounded-full"></div>
            </a>

        </nav>

        <!-- TOGGLE -->
        <button id="menuToggle" class="md:hidden flex flex-col gap-1 p-2">
            <span class="block w-5 h-0.5 bg-foreground"></span>
            <span class="block w-5 h-0.5 bg-foreground"></span>
            <span class="block w-5 h-0.5 bg-foreground"></span>
        </button>

    </div>
</header>
<style>
    .menu-active {
        opacity: 0;
        transition: 0.3s;
    }

    .menu-link.active .menu-active {
        opacity: 1;
    }

    .menu-link.active {
        color: #fff;
    }

    /* @media(max-width:768px) {
        #mainMenu {
            width: 100%;
            left: 0;
            top: 70px;
        }

        .menu-link {
            display: block;
            width: 100%;
            padding: 12px 16px;
            font-size: 12px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #9ca3af;
            border-left: 3px solid transparent;
        }

        .menu-link:hover {
            background: #171a21;
            color: white;
        }

        .menu-link.active {
            color: white;
            border-left: 3px solid #ef4444;
            background: #171a21;
        }

        .menu-active {
            display: none;
        }

    } */
</style>
<script>

    const toggleBtn = document.getElementById("menuToggle");
    const menu = document.getElementById("mainMenu");

    toggleBtn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });


    const links = document.querySelectorAll(".menu-link");
    const currentPath = window.location.pathname;
    const currentHash = window.location.hash;

    // Page load पर active set
    links.forEach(link => {

        const url = new URL(link.href);

        if (url.pathname === currentPath && url.hash === currentHash) {

            links.forEach(l => l.classList.remove("active"));
            link.classList.add("active");

        }

    });

    // अगर hash नहीं है (home reload)
    if (currentPath === "/" && currentHash === "") {
        links.forEach(l => l.classList.remove("active"));
        document.querySelector('.menu-link[href="/"]').classList.add("active");
    }


    // Click पर active change
    links.forEach(link => {

        link.addEventListener("click", function () {

            links.forEach(l => l.classList.remove("active"));

            this.classList.add("active");

        });

    });

</script>