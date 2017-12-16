<?php

/* SyliusShopBundle:Product/Show:_associations.html.twig */
class __TwigTemplate_a8a97eaa6d40655479367cfb89a35c724c1441a80c7467e720d2fcd9ba7e93bb extends Twig_Template
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
        $__internal_e5919c22e27722405d28a4c5535c274224c5bc936d7ea697db11ea2c1671a855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5919c22e27722405d28a4c5535c274224c5bc936d7ea697db11ea2c1671a855->enter($__internal_e5919c22e27722405d28a4c5535c274224c5bc936d7ea697db11ea2c1671a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_associations.html.twig"));

        $__internal_4cd2ac3f618b92b7b8342db7123b6d469417db7b3d270ab9518f2673db70b178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd2ac3f618b92b7b8342db7123b6d469417db7b3d270ab9518f2673db70b178->enter($__internal_4cd2ac3f618b92b7b8342db7123b6d469417db7b3d270ab9518f2673db70b178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_associations.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "associations", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_association_show", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["association"], "id", array()), "template" => "@SyliusShop/Product/Show/_association.html.twig")));
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "    <h4 class=\"ui horizontal section divider header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.latest_products"), "html", null, true);
            echo "</h4>
    ";
            // line 5
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_product_index_latest", array("count" => 4, "template" => "@SyliusShop/Product/_horizontalList.html.twig")));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e5919c22e27722405d28a4c5535c274224c5bc936d7ea697db11ea2c1671a855->leave($__internal_e5919c22e27722405d28a4c5535c274224c5bc936d7ea697db11ea2c1671a855_prof);

        
        $__internal_4cd2ac3f618b92b7b8342db7123b6d469417db7b3d270ab9518f2673db70b178->leave($__internal_4cd2ac3f618b92b7b8342db7123b6d469417db7b3d270ab9518f2673db70b178_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  38 => 4,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for association in product.associations %}
    {{ render(url('sylius_shop_partial_product_association_show', {'productId': product.id, 'id': association.id, 'template': '@SyliusShop/Product/Show/_association.html.twig'})) }}
{% else %}
    <h4 class=\"ui horizontal section divider header\">{{ 'sylius.ui.latest_products'|trans }}</h4>
    {{ render(url('sylius_shop_partial_product_index_latest', {'count': 4, 'template': '@SyliusShop/Product/_horizontalList.html.twig'})) }}
{% endfor %}
", "SyliusShopBundle:Product/Show:_associations.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_associations.html.twig");
    }
}
