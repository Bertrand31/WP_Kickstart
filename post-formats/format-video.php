

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/VideoObject">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="name"><?php the_title(); ?></h1>

                  <p class="byline entry-meta vcard">
                    <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                       /* the time the post was published */
                       '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       /* the author of the post */
                       '<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>
                  </p>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="description">
                  <?php
                    the_content();
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">
                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
