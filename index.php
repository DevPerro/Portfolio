<?php
// index.php
// PHP 7.4 / MariaDB-10.x / UTF-8 기준 포트폴리오 메인 페이지
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JD Developer Portfolio">
    <title>개발자 임권빈 포트폴리오</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Pretendard:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/portfolio_site/assets/css/base.css">
    <link rel="stylesheet" href="/portfolio_site/assets/css/common.css">
    <link rel="stylesheet" href="/portfolio_site/assets/css/style.css">
</head>
<body>

<header class="site-header" id="siteHeader">
    <div class="container-custom header-inner">
        <a href="#home" class="logo">
            <span class="logo-mark">KB</span>
            <span>DEVELOPER</span>
        </a>

        <nav class="nav-menu" id="navMenu">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="header-icons">
            <a href="https://github.com/DevPerro" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <a href="mailto:dlarnjsqls88@gmail.com" aria-label="Email"><i class="bi bi-envelope"></i></a>
        </div>

        <button type="button" class="mobile-toggle" id="mobileToggle" aria-label="메뉴 열기">
            <i class="bi bi-list"></i>
        </button>
    </div>
</header>

<main>
    <section class="section hero" id="home">
        <div class="container-custom hero-grid">
            <div>
                <span class="section-label">Hello, World! 👋</span>
                <!-- <h1>Hello, I’m<br><strong>JD</strong> Developer</h1> -->
                <h2>안녕하세요.</h2>
                <h1>개발자 <strong>임권빈</strong>입니다.</h1>
                <p class="hero-text">
                    사용자 경험을 생각하는 웹 개발자입니다.<br>
                    코드로 가치를 만들고, 데이터로 현실을 연결합니다.
                </p>
                <div class="hero-actions">
                    <a href="#projects" class="btn-main">프로젝트 보기 <i class="bi bi-arrow-right"></i></a>
                    <a href="#about" class="btn-line">소개 더보기 <i class="bi bi-arrow-down"></i></a>
                </div>
            </div>

            <div class="code-card">
                <div class="code-tabs">
                    <span>index.php</span>
                    <span>style.css</span>
                    <span>script.js</span>
                </div>
                <span class="run-badge"><i class="bi bi-play-fill"></i> RUN</span>
<pre><span class="code-no">01</span><span class="code-pink">&lt;?php</span>
<span class="code-no">02</span>
<span class="code-no">03</span><span class="code-blue">class</span> <span class="code-purple">Developer</span> {
<span class="code-no">04</span>    <span class="code-blue">public function</span> introduce() {
<span class="code-no">05</span>        <span class="code-blue">return</span> <span class="code-green">'I build web experiences'</span>;
<span class="code-no">06</span>    }
<span class="code-no">07</span>
<span class="code-no">08</span>    <span class="code-blue">public function</span> skills() {
<span class="code-no">09</span>        <span class="code-blue">return</span> [<span class="code-green">'PHP'</span>, <span class="code-green">'JavaScript'</span>, <span class="code-green">'MariaDB'</span>];
<span class="code-no">10</span>    }
<span class="code-no">11</span>}
<span class="code-no">12</span><span class="code-pink">?&gt;</span></pre>
            </div>
        </div>
        <div class="scroll-down">
            <i class="bi bi-mouse"></i>
            Scroll Down
        </div>
    </section>

    <section class="section" id="about">
        <div class="container-custom about-grid">
            <div>
                <span class="section-label">01 About Me</span>
                <h2 class="section-title">About Me</h2>
                <p class="section-desc">
                    안녕하세요, <b style="color:var(--purple)">웹 개발자 임권빈</b>입니다.<br>
                    사용자 중심의 웹 서비스를 기획하고, 효율적이고 유지보수 가능한 코드를 작성하는 것을 중요하게 생각합니다.
                    새로운 기술을 학습하고 문제를 해결하는 것을 즐기며, 팀과 함께 성장하는 개발자가 되고자 합니다.
                </p>

                <div class="profile-info">
                    <div class="info-row"><i class="bi bi-person"></i><b>이름</b><span>임권빈</span></div>
                    <div class="info-row"><i class="bi bi-envelope"></i><b>이메일</b><span>dlarnjsqls88@gmail.com</span></div>
                    <div class="info-row"><i class="bi bi-geo-alt"></i><b>위치</b><span>Incheon, Korea</span></div>
                </div>
            </div>

            <div>
                <h3 class="mb-4 fw-bold">My Skills</h3>
                <div class="skill-grid">
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5"><span>HTML5</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3"><span>CSS3</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript"><span>JavaScript</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap"><span>Bootstrap</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP"><span>PHP</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL"><span>MySQL</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"><span>Git</span></div>
                    <div class="skill-card"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code"><span>VS Code</span></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section projects" id="projects">
        <div class="container-custom">
            <span class="section-label">02 Projects</span>
            <h2 class="section-title">My Projects</h2>

            <div class="main-project-card">
                <div>
                    <span class="project-badge">메인 프로젝트</span>
                    <h3>ReserveHub</h3>
                    <p>통합 예약 관리 시스템</p>
                    <ul>
                        <li>실시간 예약 및 관리</li>
                        <li>다양한 알림 및 통계 제공</li>
                        <li>관리자 대시보드 지원</li>
                        <li>모바일 반응형 지원</li>
                    </ul>
                    <div class="tag-list">
                        <span>PHP</span><span>MariaDB</span><span>JavaScript</span><span>Bootstrap</span>
                    </div>
                    <div class="project-actions">
                        <button type="button" class="btn-main" data-bs-toggle="modal" data-bs-target="#mainProjectModal">자세히 보기 <i class="bi bi-arrow-right"></i></button>
                        <a href="/reservehub" target="_blank" class="btn-line">사이트 바로가기 <i class="bi bi-box-arrow-up-right"></i></a>
                    </div>
                </div>
                <div class="dashboard-mock">
                    <div class="dashboard-top"></div>
                    <div class="dash-grid">
                        <div class="dash-box"></div><div class="dash-box"></div><div class="dash-box"></div><div class="dash-box"></div>
                    </div>
                    <div class="dash-chart"></div>
                </div>
            </div>

            <h3 class="sub-title">서브 프로젝트</h3>
            <div class="sub-project-grid">
                <?php
                $projects = [
                    ['Portfolio v1', '개인 포트폴리오 사이트'],
                    ['Cafe Order System', '카페 주문 관리 시스템'],
                    ['Blog Platform', '블로그 플랫폼'],
                    ['Shop Management', '쇼핑몰 관리 시스템'],
                    ['Community Site', '커뮤니티 웹사이트'],
                    ['ToDo List', '할 일 관리 앱'],
                ];
                foreach ($projects as $project) {
                ?>
                <article class="sub-card" data-bs-toggle="modal" data-bs-target="#subProjectModal" data-title="<?=$project[0]?>" data-desc="<?=$project[1]?>">
                    <div class="sub-thumb"></div>
                    <div class="sub-body">
                        <div>
                            <h4><?=$project[0]?></h4>
                            <p><?=$project[1]?></p>
                        </div>
                        <div class="plus-btn"><i class="bi bi-plus"></i></div>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container-custom contact-grid">
            <div>
                <span class="section-label">03 Contact</span>
                <h2 class="section-title">Contact Me</h2>
                <p class="section-desc">궁금한 점이 있다면 언제든지 연락주세요.</p>

                <div class="profile-info">
                    <div class="info-row"><i class="bi bi-person"></i><b>이름</b><span>임권빈</span></div>
                    <div class="info-row"><i class="bi bi-envelope"></i><b>이메일</b><span>dlarnjsqls88@gmail.com</span></div>
                    <div class="info-row"><i class="bi bi-telephone"></i><b>연락처</b><span>010-7332-7752</span></div>
                    <div class="info-row"><i class="bi bi-github"></i><b>GitHub</b><span><a href="https://github.com/DevPerro" target="_blank">DevPerro</a></span></div>
                </div>
            </div>

            <form class="contact-form" action="/app/processing/contact_prc.php" method="post">
                <input type="text" name="name" placeholder="이름">
                <input type="email" name="email" placeholder="이메일">
                <input type="text" name="phone" placeholder="연락처" class="full">
                <textarea name="message" placeholder="메시지"></textarea>
                <button type="submit" class="btn-main">메시지 보내기 <i class="bi bi-send"></i></button>
            </form>
        </div>
    </section>

    <section class="cta-band">
        <div class="container-custom">
            <h2>함께 멋진 프로젝트를 만들어가요!</h2>
            <div class="cta-actions">
                <a href="https://github.com/DevPerro" target="_blank"><i class="bi bi-github"></i> GitHub</a>
                <a href="mailto:dlarnjsqls88@gmail.com"><i class="bi bi-envelope"></i> Email</a>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    © 2026 KB Developer. All rights reserved.
</footer>

<button type="button" class="top-btn" id="topBtn" aria-label="위로 이동">
    <i class="bi bi-arrow-up"></i>
</button>

<!-- Main Project Modal -->
<div class="modal fade" id="mainProjectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold">ReserveHub 프로젝트 상세</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="fw-bold">ReserveHub</h3>
                <p class="text-muted mt-3">
                    ReserveHub는 사용자 예약 신청, 예약 목록, 관리자 예약 관리, 예약 가능 시간 관리,
                    공지사항 및 문의 관리를 포함하는 통합 예약 관리 시스템입니다.
                </p>
                <hr>
                <div class="row g-4">
                    <div class="col-md-6">
                        <h5 class="fw-bold">주요 기능</h5>
                        <ul>
                            <li>회원가입 / 로그인 / 마이페이지</li>
                            <li>예약 신청 / 목록 / 상세</li>
                            <li>관리자 대시보드</li>
                            <li>예약 가능 시간 관리</li>
                            <li>공지사항 / 문의 관리</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="fw-bold">작업 환경</h5>
                        <ul>
                            <li>PHP 7.4</li>
                            <li>MariaDB 10.x</li>
                            <li>UTF-8</li>
                            <li>Bootstrap / JavaScript</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="/reservehub" target="_blank" class="btn-main">/reservehub 이동 <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sub Project Modal -->
<div class="modal fade" id="subProjectModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="subModalTitle">서브 프로젝트</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="sub-thumb rounded-4 mb-4"></div>
                <p class="text-muted" id="subModalDesc">프로젝트 설명</p>
                <p>작업 목적, 담당 역할, 사용 기술, 문제 해결 경험 등을 이곳에 정리하면 됩니다.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/portfolio_site/assets/js/script.js"></script>
</body>
</html>
