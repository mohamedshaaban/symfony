<?php

/* @SyliusShop/Product/Show/_associations.html.twig */
class __TwigTemplate_415bf1e31d65672c9428abd4717d591fb2b407a1e372d84e1e987d91006016a8 extends Twig_Template
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
        $__internal_c6ee1770f50ed045a4ede256102e13131ab00e34e9f113af997903a7d8f3316d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ee1770f50ed045a4ede256102e13131ab00e34e9f113af997903a7d8f3316d->enter($__internal_c6ee1770f50ed045a4ede256102e13131ab00e34e9f113af997903a7d8f3316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

        $__internal_550e4e05ae527cf593ba249c2a467891a0fb9ac369c38ffdc5dbfc96f0ace1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550e4e05ae527cf593ba249c2a467891a0fb9ac369c38ffdc5dbfc96f0ace1bc->enter($__internal_550e4e05ae527cf593ba249c2a467891a0fb9ac369c38ffdc5dbfc96f0ace1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_associations.html.twig"));

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
        
        $__internal_c6ee1770f50ed045a4ede256102e13131ab00e34e9f113af997903a7d8f3316d->leave($__internal_c6ee1770f50ed045a4ede256102e13131ab00e34e9f113af997903a7d8f3316d_prof);

        
        $__internal_550e4e05ae527cf593ba249c2a467891a0fb9ac369c38ffdc5dbfc96f0ace1bc->leave($__internal_550e4e05ae527cf593ba249c2a467891a0fb9ac369c38ffdc5dbfc96f0ace1bc_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_associations.html.twig";
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
", "@SyliusShop/Product/Show/_associations.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_associations.html.twig");
    }
}
