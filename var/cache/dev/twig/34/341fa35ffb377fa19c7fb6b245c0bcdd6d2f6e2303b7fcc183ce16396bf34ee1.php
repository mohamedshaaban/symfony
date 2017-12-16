<?php

/* @SyliusShop/_footer.html.twig */
class __TwigTemplate_30a8262a504b3b80348e6a5bdf0fc402fa86718d07d84dff0d5e8f22071b5de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7060fbd25c0d727138422efb2233071c38605cbf57a1a5b10e1d5f88fb1365b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7060fbd25c0d727138422efb2233071c38605cbf57a1a5b10e1d5f88fb1365b->enter($__internal_c7060fbd25c0d727138422efb2233071c38605cbf57a1a5b10e1d5f88fb1365b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_footer.html.twig"));

        $__internal_4427d94f8e4a32d54a2b7649f6c43a624df73dfbf2e313cf7f4fe71e2a2754a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4427d94f8e4a32d54a2b7649f6c43a624df73dfbf2e313cf7f4fe71e2a2754a2->enter($__internal_4427d94f8e4a32d54a2b7649f6c43a624df73dfbf2e313cf7f4fe71e2a2754a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_footer.html.twig"));

        // line 1
        echo "<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_footer"));
        echo "

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.about"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.terms_and_conditions"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.privacy_policy"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_care"), "html", null, true);
        echo "</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_contact_request");
        echo "\" class=\"item\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.contact_us"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.faqs"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.delivery_and_shipping"), "html", null, true);
        echo "</a>
                    <a href=\"#\" class=\"item\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.returns_policy"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.your_store"), "html", null, true);
        echo "</h4>
                <p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.powered_by"), "html", null, true);
        echo " <a href=\"http://sylius.org\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_footer"));
        echo "
        </div>
    </div>
</footer>
";
        
        $__internal_c7060fbd25c0d727138422efb2233071c38605cbf57a1a5b10e1d5f88fb1365b->leave($__internal_c7060fbd25c0d727138422efb2233071c38605cbf57a1a5b10e1d5f88fb1365b_prof);

        
        $__internal_4427d94f8e4a32d54a2b7649f6c43a624df73dfbf2e313cf7f4fe71e2a2754a2->leave($__internal_4427d94f8e4a32d54a2b7649f6c43a624df73dfbf2e313cf7f4fe71e2a2754a2_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  92 => 26,  88 => 25,  81 => 21,  77 => 20,  73 => 19,  67 => 18,  62 => 16,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\" class=\"ui inverted vertical footer segment\">
    <div class=\"ui container\">
        <div class=\"ui inverted divided equal height stackable grid\">
            {{ sonata_block_render_event('sylius.shop.layout.before_footer') }}

            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.your_store'|trans }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.about'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.terms_and_conditions'|trans }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.privacy_policy'|trans }}</a>
                    <a href=\"{{ path('sylius_shop_contact_request') }}\" class=\"item\">{{ 'sylius.ui.contact_us'|trans }}</a>
                </div>
            </div>
            <div class=\"three wide column\">
                <h4 class=\"ui inverted header\">{{ 'sylius.ui.customer_care'|trans  }}</h4>
                <div class=\"ui inverted link list\">
                    <a href=\"{{ path('sylius_shop_contact_request') }}\" class=\"item\">{{ 'sylius.ui.contact_us'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.faqs'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.delivery_and_shipping'|trans  }}</a>
                    <a href=\"#\" class=\"item\">{{ 'sylius.ui.returns_policy'|trans  }}</a>
                </div>
            </div>
            <div class=\"eight wide column\">
                <h4 class=\"ui inverted header\">&copy; {{ 'sylius.ui.your_store'|trans }}</h4>
                <p>{{ 'sylius.ui.powered_by'|trans }} <a href=\"http://sylius.org\" target=\"_blank\" style=\"color: #1abb9c;\">Sylius</a>.</p>
            </div>

            {{ sonata_block_render_event('sylius.shop.layout.after_footer') }}
        </div>
    </div>
</footer>
", "@SyliusShop/_footer.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\_footer.html.twig");
    }
}
