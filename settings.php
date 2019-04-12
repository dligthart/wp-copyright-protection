<?php
/**
 * Settings.
 *
 * @author Trive.amsterdam
 * @package wpcp
 * @subpackage view
 * @version 0.1
 */
?>
<div class="wrap">

    <form method="post" action="options.php">
        <?php settings_fields('wpcp-group'); ?>

        <h2><?php _e('WP-Copyright-Protection', 'wpcp'); ?></h2>

        <table class="form-table">
            <tr valign="top">
                <th scope="row"><?php _e('Exclude Pages', 'wpcp'); ?></th>

                <td><input type="text" name="wpcp_exclude_pages"
                           value="<?php echo get_option('wpcp_exclude_pages'); ?>"/>
                    <p><?php _e('Enter page ids: comma-separated. e.g. 1,2,3,4', 'wpcp'); ?></td>

            </tr>
            <tr>
                <th scope="row"><?php _e('Disable for registered users', 'wpcp'); ?></th>
                <td>
                    <input type="checkbox" name="wpcp_disable_for_regusers"
                           value="1" <?php if (get_option('wpcp_disable_for_regusers')) {
                        echo 'checked="checked"';
                    } ?>/>
                    <p><?php _e('Toggle', 'wpcp'); ?></p>
                </td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>

    <div id="hero" class="section-hero">
        <a href="https://www.trivetechnology.com" target="_blank" class="link-logo w-inline-block w--current"><img
                    src="<?php echo plugin_dir_url(__FILE__); ?>/assets/image/logo.svg"
                    width="180" alt="">
        </a>
        <div class="div-hero-text">
            <h1 class="h1 hero">
                Trive means making your projects flourish with a fully focused and reliable development team. 
            </h1>
        </div>
        <div class="banner_text">
            <p class="bold">
                App and Web
            </p>

            <p>
                We offer to fill-in the CTO role for (non-technical) founders of startups and scaleups which helps in
                filling in gaps in the C-Level positions and technical ownership of the product that is going to be
                built. Trive will be committed to deliver technical capacity throughout the product life-cycle
            </p>

            <p class="bold">
                Caring on a holistic level
            </p>

            <ul>
                <li>Project management</li>
                <li>Quality assurance</li>
                <li>DevOps</li>
                <li>Development</li>
                <li>User Experience and Design</li>
                <li>Hosting and maintenance.</li>
            </ul>

            <p class="bold">
                Get the best developers
            </p>

            <p>
                Trive has a large pool of developers and can deliver on-demand development resources in all desired
                technical stacks. And scale up capacity where needed.
            </p>

            <p class="bold">
                With sprints you are in control
            </p>

            <p>
                We use an iterative approach based on a proven Agile and Scrum methodology were you control the
                priorities
                in the backlog.
            </p>

            <p class="bold">
                We maintain happiness
            </p>

            <p>
                We run the complete product life cycle as we liaison with stakeholders. We make sure that everybody
                stays
                happy and strive to keep a worry-free relationship
            </p>
        </div>
    </div>

</div>

<div class="wpcp-footer">
    <span>By</span> <a href="https://www.trivetechnology.com" target="_blank" title="Created by Trive Technology">
        <span>
            Trive Technology
        </span>
    </a>
    <cite>Happy to be of service.</cite>
</div>
