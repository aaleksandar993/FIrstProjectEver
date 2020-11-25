<div class="modal fade displayCV" tabindex="-1" role="dialog" aria-labelledby="displayCV" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				CV
			</div>
			<div class="container-fluid pb-3 pt-3" style="height: 80vh;">
				<?php if (!empty($candidate->candidateCV)): ?>
				<embed src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'cv'.DS.$candidate->candidateCV ?>" width="100%" height="100%">
				<?php else: ?>
				<embed src="<?=DS.'public'.DS.'storage'.DS.'default'.DS.'notFound.pdf' ?>" width="100%" height="100%">
				<?php endif ?>
			</div>
		</div>
	</div>
</div>