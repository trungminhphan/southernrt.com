<?php
require_once('header_en.php');
?>
<div class="spacer"></div>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel widget widget_text panel-first-child" id="panel-7-3-0-0">	
					<div class="textwidget"></div>
				</div>
				<div class="panel panel-grid widget widget_black-studio-tinymce panel-last-child" id="panel-7-3-0-1">
					<h3 class="widget-title">1. Reseacrh on Community-based Tourism and Contract Farming</h3>
				</div>
			</div>
			<p>Conducting field work in Tri Ton district …</p>
			<?php for($i=1;$i<=6;$i++): ?>
			<div class="project-post filter-buildings filter-interior-design col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
				<img src="images/duan/duan1-<?php echo $i; ?>.jpg" alt="Project Image"  />
				<div class="project-content">
					<div class="inner-project">
						<h3>Project 1</h3>                                    
						<a href="images/duan/duan1-<?php echo $i; ?>.jpg" class="project-link" title="Reseacrh on Community-based Tourism and Contract Farming" data-rel="prettyPhoto[gallery]">
							View
						</a>
					</div>	
				</div>
			</div>
		<?php endfor; ?>
		</div>
	</div>
<?php require_once('footer_en.php'); ?>
