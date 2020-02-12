<?php
	the_post();
	get_header();
?>


	<!-- s-content
	================================================== -->
	<section class="s-content s-content--narrow s-content--no-padding-bottom">

		<article class="row format-standard">

			<div class="s-content__header col-full">
				<h1 class="s-content__header-title">
					<?php the_title(); ?>
				</h1>
				<ul class="s-content__header-meta">
					<li class="date"><?php the_date(); ?></li>
					<li class="cat">
						In
						<?php echo get_the_category_list( ' ' ); // the_category( ' ' ); ?>
					</li>
				</ul>
			</div> <!-- end s-content__header -->
	
			<div class="s-content__media col-full">
				<div class="s-content__post-thumb">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>
			</div> <!-- end s-content__media -->

			<div class="col-full s-content__main">
				<?php the_content(); ?>

				<p class="s-content__tags">
					<span>Post Tags</span>

					<span class="s-content__tag-list">
						<?php
							echo get_the_tag_list();
							// the_tags();
						?>
					</span>
				</p> <!-- end s-content__tags -->

				<div class="s-content__author">
					<?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>

					<div class="s-content__author-about">
						<h4 class="s-content__author-name">
							<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author(); ?></a>
						</h4>
						<p><?php the_author_meta( 'description' ); ?></p>

						<ul class="s-content__author-social">
							<?php
								$philosophy_author_facebook  = get_field( 'facebook', 'user_' . get_the_author_meta( 'ID' ) );
								$philosophy_author_twitter   = get_field( 'twitter', 'user_' . get_the_author_meta( 'ID' ) );
								$philosophy_author_instagram = get_field( 'instagram', 'user_' . get_the_author_meta( 'ID' ) );
							?>
						   <?php if ( $philosophy_author_facebook ) : ?>
							<li><a href="<?php echo esc_url( $philosophy_author_facebook ); ?>">Facebook</a></li>
						   <?php endif; ?>
						   <?php if ( $philosophy_author_twitter ) : ?>
							<li><a href="<?php echo esc_url( $philosophy_author_twitter ); ?>">Twitter</a></li>
						   <?php endif; ?>
						   <?php if ( $philosophy_author_instagram ) : ?>
							<li><a href="<?php echo esc_url( $philosophy_author_instagram ); ?>">Instagram</a></li>
						   <?php endif; ?>
						</ul>
					</div>
				</div>

				<div class="s-content__pagenav">
					<div class="s-content__nav">
						<div class="s-content__prev">
							<?php
								$philosophy_prev_post = get_previous_post();
							if ( $philosophy_prev_post ) :
								?>
							<a href="<?php echo get_the_permalink( $philosophy_prev_post ); ?>" rel="prev">
								<span><?php _e( 'Previous Post', 'philosophy' ); ?></span>
								<?php echo get_the_title( $philosophy_prev_post ); ?>
							</a>
							<?php endif; ?>
						</div>
						<div class="s-content__next">
							<?php
								$philosophy_next_post = get_next_post();
							if ( $philosophy_next_post ) :
								?>
							<a href="<?php echo get_the_permalink( $philosophy_next_post ); ?>" rel="prev">
								<span><?php _e( 'Next Post', 'philosophy' ); ?></span>
								<?php echo get_the_title( $philosophy_next_post ); ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div> <!-- end s-content__pagenav -->

			</div> <!-- end s-content__main -->

		</article>


		<!-- comments
		================================================== -->
		<div class="comments-wrap">

			<div id="comments" class="row">
				<div class="col-full">

					<h3 class="h2">5 Comments</h3>

					<!-- commentlist -->
					<ol class="commentlist">

						<li class="depth-1 comment">

							<div class="comment__avatar">
								<img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
							</div>

							<div class="comment__content">

								<div class="comment__info">
									<cite>Itachi Uchiha</cite>

									<div class="comment__meta">
										<time class="comment__time">Dec 16, 2017 @ 23:05</time>
										<a class="reply" href="#0">Reply</a>
									</div>
								</div>

								<div class="comment__text">
								<p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
								facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
								</div>

							</div>

						</li> <!-- end comment level 1 -->

						<li class="thread-alt depth-1 comment">

							<div class="comment__avatar">
								<img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
							</div>

							<div class="comment__content">

								<div class="comment__info">
								<cite>John Doe</cite>

								<div class="comment__meta">
									<time class="comment__time">Dec 16, 2017 @ 24:05</time>
									<a class="reply" href="#0">Reply</a>
								</div>
								</div>

								<div class="comment__text">
								<p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
								urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
								tantas semper delicatissimi.</p>
								</div>

							</div>

							<ul class="children">

								<li class="depth-2 comment">

									<div class="comment__avatar">
										<img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
									</div>

									<div class="comment__content">

										<div class="comment__info">
											<cite>Kakashi Hatake</cite>

											<div class="comment__meta">
												<time class="comment__time">Dec 16, 2017 @ 25:05</time>
												<a class="reply" href="#0">Reply</a>
											</div>
										</div>

										<div class="comment__text">
											<p>Duis sed odio sit amet nibh vulputate
											cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
											cursus a sit amet mauris</p>
										</div>

									</div>

									<ul class="children">

										<li class="depth-3 comment">

											<div class="comment__avatar">
												<img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
											</div>

											<div class="comment__content">

												<div class="comment__info">
												<cite>John Doe</cite>

												<div class="comment__meta">
													<time class="comment__time">Dec 16, 2017 @ 25:15</time>
													<a class="reply" href="#0">Reply</a>
												</div>
												</div>

												<div class="comment__text">
												<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
												etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
												</div>

											</div>

										</li>

									</ul>

								</li>

							</ul>

						</li> <!-- end comment level 1 -->

						<li class="depth-1 comment">

							<div class="comment__avatar">
								<img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
							</div>

							<div class="comment__content">

								<div class="comment__info">
								<cite>Shikamaru Nara</cite>

								<div class="comment__meta">
									<time class="comment-time">Dec 16, 2017 @ 25:15</time>
									<a class="reply" href="#">Reply</a>
								</div>
								</div>

								<div class="comment__text">
								<p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
								</div>

							</div>

						</li>  <!-- end comment level 1 -->

					</ol> <!-- end commentlist -->


					<!-- respond
					================================================== -->
					<div class="respond">

						<h3 class="h2">Add Comment</h3>

						<form name="contactForm" id="contactForm" method="post" action="">
							<fieldset>

								<div class="form-field">
										<input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
								</div>

								<div class="form-field">
										<input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
								</div>

								<div class="form-field">
										<input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
								</div>

								<div class="message form-field">
									<textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
								</div>

								<button type="submit" class="submit btn--primary btn--large full-width">Submit</button>

							</fieldset>
						</form> <!-- end form -->

					</div> <!-- end respond -->

				</div> <!-- end col-full -->

			</div> <!-- end row comments -->
		</div> <!-- end comments-wrap -->

	</section> <!-- s-content -->


   <?php get_footer(); ?>
