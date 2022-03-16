<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/lifepoints_sass/templates/system/page.html.twig */
class __TwigTemplate_9183df3166431a65ba55a0dd937ee22f7019f25a4ee60e10842407267a240211 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "  ";
        // line 60
        echo "  ";
        // line 73
        echo "
 ";
        // line 75
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 75) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 75))) {
            // line 76
            echo "      ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 83
            echo "  ";
        }
        echo " 
 


";
        // line 111
        echo "
  ";
        // line 113
        echo "  ";
        $this->displayBlock('main', $context, $blocks);
        // line 204
        echo "
<div class=\"container-fluid lightgrey-3\">
    <!-- footer page banner -->
    <div class=\"container\">

        <div class=\"row\">
            ";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_bannerBottom", [], "any", false, false, true, 210), 210, $this->source), "html", null, true);
        echo "
        </div>

    </div>
</div>

";
        // line 216
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 216)) {
            // line 217
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 223
        echo "
<div class=\"secondary-footer\">
    <div class=\"container text-center\">
        ";
        // line 226
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_footerStrapline", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
        echo "
    </div>
</div>
";
        // line 229
        if (($context["userLoginStatus"] ?? null)) {
            // line 230
            echo "  ";
            $context["footerclass"] = "";
            // line 231
            echo "  ";
            $context["footercopyrightclass"] = "";
            // line 232
            echo "  ";
            $context["footercopyrightgrayclass"] = "blue-grey";
        } else {
            // line 234
            echo "  ";
            $context["footerclass"] = "main-footer-blue";
            // line 235
            echo "  ";
            $context["footercopyrightclass"] = "havelock-blue";
            // line 236
            echo "  ";
            $context["footercopyrightgrayclass"] = "";
        }
        // line 238
        echo "<div class=\"main-footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerclass"] ?? null), 238, $this->source), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-4\">
                <!-- logo, our privacy content and privacy menu (block 1 - region footBlock1)-->
                <div class=\"row\">
                    <div class=\"col-md-2 hidden-xs\">
                        <div class=\"footerLogo\"></div>
                        <br>
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 250
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_A", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
        echo "
                        <br>
                        <!-- block 2 -->

                    </div>

                </div>
            </div> <!-- col-md-6 -->

            <div class=\"col-md-5\">
                <div class=\"row\">
                    <div class=\"col-xs-6\">
                        ";
        // line 262
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_B", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
        echo " <!-- block 2 -->
                        <br>
                    </div>
                    <div class=\"col-xs-6\">
                        ";
        // line 266
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_C", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
        echo " <!-- block 2 -->
                        <br>
                    </div>
                </div>
            </div>


            <div class=\"col-md-3\"> <!-- social links -->

                ";
        // line 275
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerBlock_D", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
        echo " <!-- block 2 -->

            </div>

        </div> <!-- end of main footer row -->
    </div><!-- end of container -->
</div> <!-- end of main footer class -->

<div class=\"main-footer-copyright ";
        // line 283
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footercopyrightclass"] ?? null), 283, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footercopyrightgrayclass"] ?? null), 283, $this->source), "html", null, true);
        echo "\">
  <div class=\"container\">
    ";
        // line 285
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_copyright", [], "any", false, false, true, 285), 285, $this->source), "html", null, true);
        echo "
  </div>
</div>

<div class=\"page_end\">
\t";
        // line 290
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_end", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
        echo "
</div>

<div id=\"resenddoiemail-box\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Resend DOI Modal content-->
        <div class=\"modal-content text-center\">

            <div class=\"modal-body\">
                <a class=\"close login-box-close pull-right\" data-dismiss=\"modal\"><i class=\"fas fa-times icon18\"></i></a>
                <img src=\"";
        // line 301
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basic_host_url"] ?? null), 301, $this->source), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 301, $this->source), "html", null, true);
        echo "/img/resend-link.svg\" alt=\"\" style=\"width:227px;\"/>

                <div class=\"alert alert-danger resend-doi-email-errors\"></div>
                <div class=\"alert alert-success resend-doi-email-success\"></div>
                ";
        // line 305
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["resenddoiemail_form"] ?? null), 305, $this->source), "html", null, true);
        echo "
            </div>

        </div>

    </div>
</div>

<div id=\"login-box\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">

            <div class=\"modal-body\">

                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"hid\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 text-center\">


                                    <div class=\"card-content\">
                                        <a class=\"close login-box-close pull-right\" data-dismiss=\"modal\"><i
                                                    class=\"fas fa-times icon18\"></i></a>
                                        <div class=\"icon-logo\"></div>
                                        <h2 class=\"text-center\">";
        // line 332
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("LOG IN"));
        echo "</h2>
                                        <br>
                                        <!--Login form Html-->
                                        <div class=\"loginhtmldata\"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<div id=\"terms-form-box\" class=\"modal fade\" role=\"dialog\">
\t<div class=\"modal-dialog\">

\t\t<!-- Modal content-->
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"text-center\">
                                <img src=\"";
        // line 364
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["basic_host_url"] ?? null), 364, $this->source), "html", null, true);
        echo "/";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 364, $this->source), "html", null, true);
        echo "/img/logo_icons/lp-logo.svg\" width=\"200\">
                            </div>
\t\t\t\t\t\t\t<h2 class=\"text-center\">";
        // line 366
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("TERMS & CONDITIONS"));
        echo "</h2>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 368
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["lp_terms_form"] ?? null), 368, $this->source), "html", null, true);
        echo "

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>
</div>

<!-- forgotpassword-success box -->
<div id=\"forgotpassword-success-box\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">

            <div class=\"modal-body\">
                <a class=\"close login-box-close pull-right\" data-dismiss=\"modal\"><i class=\"fas fa-times icon18\"></i></a>
                <div class=\"icon-logo\"></div>
                <h2 class=\"text-center\">";
        // line 391
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forgot your Password?"));
        echo "</h2>
                <p class=\"text-center\">";
        // line 392
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fogotpassword_mail_sent_submit"] ?? null), 392, $this->source), "html", null, true);
        echo "</p>
                <p class=\"text-center\">
                    <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-info btn-round-lg btn-lg\">CLOSE</button>
                </p>
            </div>

        </div>

    </div>
</div>

";
        // line 411
        echo "<div class=\"barc-cookies-box\" style=\"display: none;\"></div>

";
        // line 414
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_mobile", [], "any", false, false, true, 414)) {
            // line 415
            echo "  <div id=\"sidebar-collapse\" class=\"sidebar-collapse\">
    ";
            // line 416
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_mobile", [], "any", false, false, true, 416), 416, $this->source), "html", null, true);
            echo "
  </div>
";
        }
        // line 419
        echo "
<!-- FAB form -->
";
        // line 421
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["FabForm"] ?? null), 421, $this->source), "html", null, true);
        echo "
";
    }

    // line 76
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "          ";
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["theme"] ?? null), "settings", [], "any", false, false, true, 79), "navbar_inverse", [], "any", false, false, true, 79)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "navbar_position", [], "any", false, false, true, 80)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 80), "navbar_position", [], "any", false, false, true, 80), 80, $this->source)))) : (($context["container"] ?? null)))];
        // line 82
        echo "      ";
    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        echo "      <div role=\"main\" class=\"main-container js-quickedit-main-content\">


              ";
        // line 118
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 118)) {
            // line 119
            echo "                  ";
            $this->displayBlock('header', $context, $blocks);
            // line 124
            echo "              ";
        }
        // line 125
        echo "
              ";
        // line 127
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 127)) {
            // line 128
            echo "                  ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 133
            echo "              ";
        }
        // line 134
        echo "
              ";
        // line 136
        echo "              ";
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 137
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 137) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 137))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 138
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 138) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 138)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 139
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 139) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 139)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 140
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 140)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 140)))) ? ("col-sm-12") : (""))];
        // line 142
        echo "
              <section>
                <div class=\"container\">
                  ";
        // line 146
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146)) {
            // line 147
            echo "                      ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 150
            echo "                  ";
        }
        // line 151
        echo "                </div>

                  ";
        // line 154
        echo "                  ";
        if (($context["breadcrumb"] ?? null)) {
            // line 155
            echo "                      ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 158
            echo "                  ";
        }
        // line 159
        echo "
                  ";
        // line 161
        echo "                  ";
        if (($context["action_links"] ?? null)) {
            // line 162
            echo "                      ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 165
            echo "                  ";
        }
        // line 166
        echo "
                  ";
        // line 168
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 168)) {
            // line 169
            echo "                      ";
            $this->displayBlock('help', $context, $blocks);
            // line 172
            echo "                  ";
        }
        // line 173
        echo "
                  ";
        // line 175
        echo "                  ";
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "                      </div>
                  </article>
              </section>

              ";
        // line 194
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 194)) {
            // line 195
            echo "                  ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 200
            echo "              ";
        }
        // line 201
        echo "
      </div>
  ";
    }

    // line 119
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "                      <div class=\"col-sm-12\" role=\"heading\">
                          ";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "
                      </div>
                  ";
    }

    // line 128
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "                      <aside class=\"col-sm-3\" role=\"complementary\">
                          ";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
        echo "
                      </aside>
                  ";
    }

    // line 147
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "                          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "</div>
                      ";
    }

    // line 155
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 156, $this->source), "html", null, true);
        echo "
                      ";
    }

    // line 162
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "                          <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 163, $this->source), "html", null, true);
        echo "</ul>
                      ";
    }

    // line 169
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "                          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
        echo "
                      ";
    }

    // line 175
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "                  <a id=\"main-content\"></a>
                  ";
        // line 177
        $context["classes"] = [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 178
($context["node"] ?? null), "bundle", [], "any", false, false, true, 178), 178, $this->source)), 1 => ((twig_get_attribute($this->env, $this->source,         // line 179
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 179)) ? ("is-promoted") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 180
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 180)) ? ("is-sticky") : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 181
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 181)) ? ("") : ("")), 4 => ((        // line 182
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 182, $this->source))) : ("")), 5 => "clearfix"];
        // line 185
        echo "                  <article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 185), 185, $this->source), "html", null, true);
        echo ">
                      <div";
        // line 186
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 186), 186, $this->source), "html", null, true);
        echo ">
                          ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
        echo "
                          ";
    }

    // line 195
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        echo "                      <aside class=\"col-sm-3\" role=\"complementary\">
                          ";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "
                      </aside>
                  ";
    }

    // line 217
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "        <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 218, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
            ";
        // line 219
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
        echo "
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/lifepoints_sass/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 219,  628 => 218,  624 => 217,  617 => 197,  614 => 196,  610 => 195,  604 => 187,  600 => 186,  595 => 185,  593 => 182,  592 => 181,  591 => 180,  590 => 179,  589 => 178,  588 => 177,  585 => 176,  581 => 175,  574 => 170,  570 => 169,  563 => 163,  559 => 162,  552 => 156,  548 => 155,  541 => 148,  537 => 147,  530 => 130,  527 => 129,  523 => 128,  516 => 121,  513 => 120,  509 => 119,  503 => 201,  500 => 200,  497 => 195,  494 => 194,  488 => 189,  485 => 175,  482 => 173,  479 => 172,  476 => 169,  473 => 168,  470 => 166,  467 => 165,  464 => 162,  461 => 161,  458 => 159,  455 => 158,  452 => 155,  449 => 154,  445 => 151,  442 => 150,  439 => 147,  436 => 146,  431 => 142,  429 => 140,  428 => 139,  427 => 138,  426 => 137,  424 => 136,  421 => 134,  418 => 133,  415 => 128,  412 => 127,  409 => 125,  406 => 124,  403 => 119,  400 => 118,  395 => 114,  391 => 113,  387 => 82,  385 => 80,  384 => 79,  382 => 77,  378 => 76,  372 => 421,  368 => 419,  362 => 416,  359 => 415,  357 => 414,  353 => 411,  339 => 392,  335 => 391,  309 => 368,  304 => 366,  297 => 364,  262 => 332,  232 => 305,  223 => 301,  209 => 290,  201 => 285,  194 => 283,  183 => 275,  171 => 266,  164 => 262,  149 => 250,  133 => 238,  129 => 236,  126 => 235,  123 => 234,  119 => 232,  116 => 231,  113 => 230,  111 => 229,  105 => 226,  100 => 223,  96 => 217,  94 => 216,  85 => 210,  77 => 204,  74 => 113,  71 => 111,  63 => 83,  60 => 76,  57 => 75,  54 => 73,  52 => 60,  50 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/lifepoints_sass/templates/system/page.html.twig", "C:\\xampp\\htdocs\\drupal-9.3\\themes\\lifepoints_sass\\templates\\system\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 75, "block" => 76, "set" => 230);
        static $filters = array("escape" => 210, "t" => 332, "clean_class" => 80);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 't', 'clean_class'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
