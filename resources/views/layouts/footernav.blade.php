<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
      <div class="footer-nav position-relative footer-style-five shadow-sm">
        <ul class="h-100 d-flex ps-0">
          <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a href="/dashboard"><i class="bi bi-house"></i></a></li>
          <li class="{{ Request::is('pages') ? 'active' : '' }}"><a href="pages.html"><i class="bi bi-folder2-open"></i></a></li>
          <li class="{{ Request::is('presensi/create') ? 'active' : '' }}"><a href="/presensi/create"><i class="bi bi-camera"></i></a></li>
          <li class="{{ Request::is('chat-users') ? 'active' : '' }}"><a href="chat-users.html"><i class="bi bi-chat-dots"></i></a></li>
          <li class="{{ Request::is('settings') ? 'active' : '' }}"><a href="settings.html"><i class="bi bi-gear"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
