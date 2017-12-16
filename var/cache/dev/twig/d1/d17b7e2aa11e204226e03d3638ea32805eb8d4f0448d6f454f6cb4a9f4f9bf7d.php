<?php

/* SyliusShopBundle:Product/Show/Tabs:_details.html.twig */
class __TwigTemplate_e96ae3453ab7b2f65cc861af0bd85d51c86a95ed178e7c9d76599c323e537cab extends Twig_Template
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
        $__internal_428bb5bfd54055417525c8ae4f5b8950870284483beb8703a9048217a54e789c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428bb5bfd54055417525c8ae4f5b8950870284483beb8703a9048217a54e789c->enter($__internal_428bb5bfd54055417525c8ae4f5b8950870284483beb8703a9048217a54e789c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig"));

        $__internal_915f4d37d7080dbeede89b080047ab5e31871872a92d82c6ec600ca9009c44c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915f4d37d7080dbeede89b080047ab5e31871872a92d82c6ec600ca9009c44c7->enter($__internal_915f4d37d7080dbeede89b080047ab5e31871872a92d82c6ec600ca9009c44c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_details", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "description", array()))) {
            // line 5
            echo "        ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "description", array()), "html", null, true));
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_description"), "html", null, true);
            echo ".
    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_428bb5bfd54055417525c8ae4f5b8950870284483beb8703a9048217a54e789c->leave($__internal_428bb5bfd54055417525c8ae4f5b8950870284483beb8703a9048217a54e789c_prof);

        
        $__internal_915f4d37d7080dbeede89b080047ab5e31871872a92d82c6ec600ca9009c44c7->leave($__internal_915f4d37d7080dbeede89b080047ab5e31871872a92d82c6ec600ca9009c44c7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show/Tabs:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 7,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_details', {'product': product}) }}

    {% if product.description is not empty %}
        {{ product.description | nl2br }}
    {% else %}
        {{ 'sylius.ui.no_description'|trans }}.
    {% endif %}
</div>
", "SyliusShopBundle:Product/Show/Tabs:_details.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/Tabs/_details.html.twig");
    }
}
