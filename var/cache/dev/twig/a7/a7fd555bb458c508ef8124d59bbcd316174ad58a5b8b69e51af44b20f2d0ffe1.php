<?php

/* @SyliusShop/Taxon/_breadcrumb.html.twig */
class __TwigTemplate_73e260f73567869ab86835637ad8d24855458de1c2c6f5d789443cdf2987f874 extends Twig_Template
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
        $__internal_f2b4e4dff820def20dc59719991eb6cd1bf7b5fff5ede5f9bedc4e6fbfba8d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b4e4dff820def20dc59719991eb6cd1bf7b5fff5ede5f9bedc4e6fbfba8d4b->enter($__internal_f2b4e4dff820def20dc59719991eb6cd1bf7b5fff5ede5f9bedc4e6fbfba8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_breadcrumb.html.twig"));

        $__internal_25645773a00463751349ac6caec21dfc259e73637e4dfd45c7642f552b452887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25645773a00463751349ac6caec21dfc259e73637e4dfd45c7642f552b452887->enter($__internal_25645773a00463751349ac6caec21dfc259e73637e4dfd45c7642f552b452887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_breadcrumb.html.twig"));

        // line 1
        $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 1, $this->getSourceContext()); })()), "ancestors", array()));
        // line 2
        echo "
<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new Twig_Error_Runtime('Variable "ancestors" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "root", array())) {
                // line 8
                echo "            <div class=\"section\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "name", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 10
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"section\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "name", array()), "html", null, true);
                echo "</a>
        ";
            }
            // line 12
            echo "    <div class=\"divider\"> / </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_f2b4e4dff820def20dc59719991eb6cd1bf7b5fff5ede5f9bedc4e6fbfba8d4b->leave($__internal_f2b4e4dff820def20dc59719991eb6cd1bf7b5fff5ede5f9bedc4e6fbfba8d4b_prof);

        
        $__internal_25645773a00463751349ac6caec21dfc259e73637e4dfd45c7642f552b452887->leave($__internal_25645773a00463751349ac6caec21dfc259e73637e4dfd45c7642f552b452887_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  59 => 12,  51 => 10,  45 => 8,  42 => 7,  38 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set ancestors = taxon.ancestors|reverse %}

<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    {% for ancestor in ancestors %}
        {% if ancestor.root %}
            <div class=\"section\">{{ ancestor.name }}</div>
        {% else %}
            <a href=\"{{ path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}) }}\" class=\"section\">{{ ancestor.name }}</a>
        {% endif %}
    <div class=\"divider\"> / </div>
    {% endfor %}
    <div class=\"active section\">{{ taxon.name }}</div>
</div>
", "@SyliusShop/Taxon/_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Taxon\\_breadcrumb.html.twig");
    }
}
