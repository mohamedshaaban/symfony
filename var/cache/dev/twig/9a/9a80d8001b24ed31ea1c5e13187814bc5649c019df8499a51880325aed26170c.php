<?php

/* SyliusShopBundle:Product/Show:_breadcrumb.html.twig */
class __TwigTemplate_56f9b858ebdde7a858f99e2fc0d593fce736c74699612eecd004230a18dc0df6 extends Twig_Template
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
        $__internal_456599e1a568a540f5d23994fb209ca5c23f5f17ad55113e38f862450a31416f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456599e1a568a540f5d23994fb209ca5c23f5f17ad55113e38f862450a31416f->enter($__internal_456599e1a568a540f5d23994fb209ca5c23f5f17ad55113e38f862450a31416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_breadcrumb.html.twig"));

        $__internal_ada2d1e7dc71cf948a1e754e4838f63ee92f981511366b552a316854fa6fd16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada2d1e7dc71cf948a1e754e4838f63ee92f981511366b552a316854fa6fd16d->enter($__internal_ada2d1e7dc71cf948a1e754e4838f63ee92f981511366b552a316854fa6fd16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 4
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "mainTaxon", array()))) {
            // line 5
            echo "        ";
            $context["taxon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 5, $this->getSourceContext()); })()), "mainTaxon", array());
            // line 6
            echo "        ";
            $context["ancestors"] = twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 6, $this->getSourceContext()); })()), "ancestors", array()));
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ancestors"]) || array_key_exists("ancestors", $context) ? $context["ancestors"] : (function () { throw new Twig_Error_Runtime('Variable "ancestors" does not exist.', 8, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ancestor"]) {
                // line 9
                echo "            ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "root", array())) {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "name", array()), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 12
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "translation", array()), "locale", array()))), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["ancestor"], "name", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 14
                echo "            <div class=\"divider\"> / </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ancestor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 17, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 17, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"section\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 17, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "</a>
        <div class=\"divider\"> / </div>
    ";
        }
        // line 20
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_456599e1a568a540f5d23994fb209ca5c23f5f17ad55113e38f862450a31416f->leave($__internal_456599e1a568a540f5d23994fb209ca5c23f5f17ad55113e38f862450a31416f_prof);

        
        $__internal_ada2d1e7dc71cf948a1e754e4838f63ee92f981511366b552a316854fa6fd16d->leave($__internal_ada2d1e7dc71cf948a1e754e4838f63ee92f981511366b552a316854fa6fd16d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  77 => 17,  74 => 16,  67 => 14,  59 => 12,  53 => 10,  50 => 9,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  35 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    {% if product.mainTaxon is not null %}
        {% set taxon = product.mainTaxon %}
        {% set ancestors = taxon.ancestors|reverse %}

        {% for ancestor in ancestors %}
            {% if ancestor.root %}
                <div class=\"section\">{{ ancestor.name }}</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_product_index', {'slug': ancestor.slug, '_locale': ancestor.translation.locale}) }}\" class=\"section\">{{ ancestor.name }}</a>
            {% endif %}
            <div class=\"divider\"> / </div>
        {% endfor %}

        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"section\">{{ taxon.name }}</a>
        <div class=\"divider\"> / </div>
    {% endif %}
    <div class=\"active section\">{{ product.name }}</div>
</div>
", "SyliusShopBundle:Product/Show:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_breadcrumb.html.twig");
    }
}
