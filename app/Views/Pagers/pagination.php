<?php use CodeIgniter\Pager\PagerRenderer; ?>

<style>
	#page {
		background-color: #d8d8d8;
		border-radius: .6rem;
	}

	.page-item.active .link {
		background: #006aff !important;
		border-radius: .6rem;
		color: #fff;
	}

	.link {
		line-height: 1.25;
		padding: 0.5rem .6rem;
		position: relative;
		display: block;
		margin-left: -1px;
		color: black;
	}

	.link:hover {
		background: #006aff !important;
		border-radius: .6rem;
		color: #fff;
	}
</style>

<nav class="d-flex justify-content-center w-100 mt-5" aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination" id="pagination">
		<?php if ($pager->hasPreviousPage()) : ?>
			<li class="page-item">
				<a class="link" href="<?= $pager->getFirst() ?>">
					<span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </span>
				</a>
			</li>
			<li class="page-item mx-1">
				<a class="link" href="<?= $pager->getPreviousPage() ?>">
					<span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </span>
				</a>
			</li>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item <?= $link['active'] ? ' active' : '' ?>" id="page-item">
				<a class="link mx-1" id="page" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>

		<?php if ($pager->hasNextPage()) : ?>
			<li class="page-item">
				<a class="link mx-1" href="<?= $pager->getNextPage() ?>">
					<span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
				</a>
			</li>
			<li class="page-item">
				<a class="link" href="<?= $pager->getLast() ?>" >
					<span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </span>
				</a>
			</li>
		<?php endif ?>
	</ul>
</nav>
