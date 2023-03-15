<nav class="navbar navbar-expand-md navbar-dark d-print-none">
	<div class="container-xl">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
			<a href="<?= base_url() ?>">
				<img src="<?= base_url() ?>assets/<?= $this->base->get_template() ?>/img/logo.png" style="filter: brightness(0) invert(1);" width="110" height="32" alt="Logo" class="navbar-brand-image">
			</a>
		</h1>
		<div class="navbar-nav flex-row order-md-last">
			<div class="nav-item">
				<div class="d-none d-md-flex me-2">
					<a href="<?= base_url() ?>u/upgrade" class="btn btn-yellow"><em class="fa fa-arrow-circle-up me-md-2"></em> <?= $this->base->text('go_premium', 'heading') ?></a>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
					<span class="avatar avatar-sm" style="background-image: url(<?= $this->user->get_avatar() ?>);"></span>
					<div class="d-none d-xl-block ps-2">
						<div><?= $this->user->get_name() ?></div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
					<a href="<?= base_url() ?>u/settings" class="dropdown-item"><?= $this->base->text('settings', 'button') ?></a>
					<a href="<?= base_url() ?>u/logout" class="dropdown-item"><?= $this->base->text('logout', 'button') ?></a>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="navbar-expand-md">
	<div class="collapse navbar-collapse" id="navbar-menu">
		<div class="navbar navbar-light">
			<div class="container-xl">
				<ul class="navbar-nav">
					<li class="nav-item <?php if (isset($active) and $active == 'home') : ?>
						active
					<?php endif ?>">
						<a class="nav-link" href="<?= base_url() ?>u/dashboard">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
   <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
   <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
</svg>				</span>
							<span class="nav-link-title">
								<?= $this->base->text('home', 'heading') ?>
							</span>
						</a>
					</li>
					<li class="nav-item <?php if (isset($active) and $active == 'profile') : ?>
						active
					<?php endif ?>">
						<a class="nav-link" href="<?= base_url() ?>u/settings">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
   <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
</svg>							</span>
							<span class="nav-link-title">
								<?= $this->base->text('profile', 'heading') ?>
							</span>
						</a>
					</li>
					<li class="nav-item <?php if (isset($active) and $active == 'account') : ?>
						active
					<?php endif ?>">
						<a class="nav-link" href="<?= base_url() ?>u/accounts">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-server-2"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
   <path d="M3 12m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z"></path>
   <path d="M7 8l0 .01"></path>
   <path d="M7 16l0 .01"></path>
   <path d="M11 8h6"></path>
   <path d="M11 16h6"></path>
</svg>							</span>
							<span class="nav-link-title">
								<?= $this->base->text('accounts', 'heading') ?>
							</span>
						</a>
					</li>
					<?php if ($this->ssl->is_active()) : ?>
						<li class="nav-item <?php if (isset($active) and $active == 'ssl') : ?>
							active
						<?php endif ?>">
							<a class="nav-link" href="<?= base_url() ?>u/ssl">
								<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
   <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
   <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
</svg>								</span>
								<span class="nav-link-title">
									<?= $this->base->text('ssl_certificates', 'heading') ?>
								</span>
							</a>
						</li>
					<?php endif ?>
					<li class="nav-item <?php if (isset($active) and $active == 'ticket') : ?>
						active
					<?php endif ?>">
						<a class="nav-link" href="<?= base_url() ?>u/tickets">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-chatbot"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4"></path>
   <path d="M9.5 9h.01"></path>
   <path d="M14.5 9h.01"></path>
   <path d="M9.5 13a3.5 3.5 0 0 0 5 0"></path>
</svg>							</span>
							<span class="nav-link-title">
								<?= $this->base->text('support_tickets', 'heading') ?>
							</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= $this->base->get_fourm() ?>">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
   <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
</svg>							</span>
							<span class="nav-link-title">
								<?= $this->base->text('community_forum', 'heading') ?>
							</span>
						</a>
					</li>
					<li class="nav-item dropdown <?php if (isset($active) and $active == 'domain') : ?>
						active
					<?php endif ?>">
						<a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
							<span class="nav-link-icon d-md-none d-lg-inline-block">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-www" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4"></path>
   <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4"></path>
   <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4"></path>
   <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4"></path>
   <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4"></path>
   <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4"></path>
   <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4"></path>
   <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4"></path>
   <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4"></path>
</svg>			</span>
							<span class="nav-link-title">
								<?= $this->base->text('domain_lookup', 'heading') ?>
							</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="<?= base_url() ?>u/domain_checker">
								<?= $this->base->text('domain_checker', 'heading') ?>
							</a>
							<a class="dropdown-item" href="<?= base_url() ?>u/whois_lookup">
								<?= $this->base->text('whois_lookup', 'heading') ?>
							</a>
							<a class="dropdown-item" href="<?= base_url() ?>u/dns_lookup">
								<?= $this->base->text('dns_lookup', 'heading') ?>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
