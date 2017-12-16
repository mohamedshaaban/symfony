<?php

/* SyliusShopBundle:Taxon:_breadcrumb.html.twig */
class __TwigTemplate_bda5fe4f563a4f145c7ce3f5da1d9642384bc03f8124e05e5b03f4aec45b834f extends Twig_Template
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
        $__internal_088b091c79a0fa7c19c172bdfa035f0673a60ec9d9ff4db0e3a72619a79269c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_088b091c79a0fa7c19c172bdfa035f0673a60ec9d9ff4db0e3a72619a79269c1->enter($__internal_088b091c79a0fa7c19c172bdfa035f0673a60ec9d9ff4db0e3a72619a79269c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_breadcrumb.html.twig"));

        $__internal_4efa056825f2905cfcc506cd8fc7dc255ee684e9a32f552ebd8aecdcae444cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efa056825f2905cfcc506cd8fc7dc255ee684e9a32f552ebd8aecdcae444cbd->enter($__internal_4efa056825f2905cfcc506cd8fc7dc255ee684e9a32f552ebd8aecdcae444cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_breadcrumb.html.twig"));

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
        
        $__internal_088b091c79a0fa7c19c172bdfa035f0673a60ec9d9ff4db0e3a72619a79269c1->leave($__internal_088b091c79a0fa7c19c172bdfa035f0673a60ec9d9ff4db0e3a72619a79269c1_prof);

        
        $__internal_4efa056825f2905cfcc506cd8fc7dc255ee684e9a32f552ebd8aecdcae444cbd->leave($__internal_4efa056825f2905cfcc506cd8fc7dc255ee684e9a32f552ebd8aecdcae444cbd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_breadcrumb.html.twig";
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
", "SyliusShopBundle:Taxon:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Taxon/_breadcrumb.html.twig");
    }
}
