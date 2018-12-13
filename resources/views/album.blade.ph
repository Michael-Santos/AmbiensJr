@extends('layouts.app')

@section('content')	
	<!-- Container Principal -->
      <div class="container mt-3">
				<div class="row">
					<div class = "row">
						<!-- Div que contém a thumb da img e a/href para o modal -->
						<!-- Quase todo estático, mudar apenas data-title/data-image/img src -->
						<!-- data-image-id é de uso interno do JS, não mexer -->
						
						<!-- Elemento Dinâmico (SELECT FROM BD WHERE ALBUM == $GET) -->
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Título da imagem"
									 data-image="https://via.placeholder.com/900"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://via.placeholder.com/300"
												 alt="Another alt text">
								</a>
						</div>	
						<!-- /Elem -->
						
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Golden"
									 data-image="https://cdn1.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://cdn1.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg"
												 alt="Another alt text">
								</a>
						</div>

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Clone"
									 data-image="https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/2018-02/cloned_dogs_mdorottya_123rf.png?itok=yiaSkqQA"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half/public/field_blog_entry_images/2018-02/cloned_dogs_mdorottya_123rf.png?itok=yiaSkqQA"
												 alt="Another alt text">
								</a>
						</div>		

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Tchuquinho"
									 data-image="https://www.guidedogs.org/wp-content/uploads/2018/01/Mobile.jpg"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://www.guidedogs.org/wp-content/uploads/2018/01/Mobile.jpg"
												 alt="Another alt text">
								</a>
						</div>	

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Uhuu"
									 data-image="https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/Natural-Dog-Law-2-To-dogs%2C-energy-is-everything.jpg?itok=Z-ujUOUr"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/Natural-Dog-Law-2-To-dogs%2C-energy-is-everything.jpg?itok=Z-ujUOUr"
												 alt="Another alt text">
								</a>
						</div>	

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Linguinea"
									 data-image="https://www.guidedogs.org/wp-content/uploads/2015/05/Dog-Im-Not.jpg"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://www.guidedogs.org/wp-content/uploads/2015/05/Dog-Im-Not.jpg"
												 alt="Another alt text">
								</a>
						</div>		
						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Linguinea 2"
									 data-image="https://images.theconversation.com/files/205966/original/file-20180212-58348-7huv6f.jpeg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://images.theconversation.com/files/205966/original/file-20180212-58348-7huv6f.jpeg?ixlib=rb-1.1.0&q=45&auto=format&w=926&fit=clip"
												 alt="Another alt text">
								</a>
						</div>	

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bundinha 2"
									 data-image="https://vetstreet.brightspotcdn.com/dims4/default/5b3ffe7/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F8e%2F4e3910c36111e0bfca0050568d6ceb%2Ffile%2Fhub-dogs-puppy.jpg"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://vetstreet.brightspotcdn.com/dims4/default/5b3ffe7/2147483647/thumbnail/180x180/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F8e%2F4e3910c36111e0bfca0050568d6ceb%2Ffile%2Fhub-dogs-puppy.jpg"
												 alt="Another alt text">
								</a>
						</div>	

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Bundinha"
									 data-image="https://boygeniusreport.files.wordpress.com/2016/11/puppy-dog.jpg?quality=98&strip=all&w=782"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://boygeniusreport.files.wordpress.com/2016/11/puppy-dog.jpg?quality=98&strip=all&w=782"
												 alt="Another alt text">
								</a>
						</div>	

						<div class="col-lg-3 col-md-4 col-xs-6 thumb">
								<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Pastorzineo"
									 data-image="https://o.aolcdn.com/images/dims3/GLOB/crop/4854x3182+0+0/resize/1028x675!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2Ff33fccca6149a8881f55cfbf6ac7ba1b%2F206112280%2Fgerman-shepherd-puppy-in-the-grass-picture-id841811318"
									 data-target="#image-gallery">
										<img class="img-thumbnail"
												 src="https://o.aolcdn.com/images/dims3/GLOB/crop/4854x3182+0+0/resize/1028x675!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2Ff33fccca6149a8881f55cfbf6ac7ba1b%2F206112280%2Fgerman-shepherd-puppy-in-the-grass-picture-id841811318"
												 alt="Another alt text">
								</a>
						</div>							
					</div>

					<!-- Modal Estático -->
					<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
											<div class="modal-header">
													<h4 class="modal-title" id="image-gallery-title"></h4>
													<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
													</button>
											</div>
											<div class="modal-body">
													<img id="image-gallery-image" class="img-responsive col-md-12" src="">
											</div>
											<div class="modal-footer">
													<button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
													</button>

													<button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
													</button>
											</div>
									</div>
							</div>
					</div>
				</div>
				<a class = "btn btn-success" href = "galeria.html">Voltar</a>
			</div>
			<!-- /Container Principal -->
@endsection