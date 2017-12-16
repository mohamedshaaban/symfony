<?php

/* @SyliusAdmin/_search.html.twig */
class __TwigTemplate_febfda199f233cfdbdfa269abc5581dce10dfb363a33349f8a249e7028b5d27d extends Twig_Template
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
        $__internal_b903857aedcace1d92def1a678a1bcb456660efe9de35ac69ae31c685d8e3507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b903857aedcace1d92def1a678a1bcb456660efe9de35ac69ae31c685d8e3507->enter($__internal_b903857aedcace1d92def1a678a1bcb456660efe9de35ac69ae31c685d8e3507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_search.html.twig"));

        $__internal_057b018deed0bcfdd208ef87cb266345da964d0380539cb719d7dae75b2cf896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057b018deed0bcfdd208ef87cb266345da964d0380539cb719d7dae75b2cf896->enter($__internal_057b018deed0bcfdd208ef87cb266345da964d0380539cb719d7dae75b2cf896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/_search.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <form method=\"get\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.search_products"), "html", null, true);
        echo "...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
";
        
        $__internal_b903857aedcace1d92def1a678a1bcb456660efe9de35ac69ae31c685d8e3507->leave($__internal_b903857aedcace1d92def1a678a1bcb456660efe9de35ac69ae31c685d8e3507_prof);

        
        $__internal_057b018deed0bcfdd208ef87cb266345da964d0380539cb719d7dae75b2cf896->leave($__internal_057b018deed0bcfdd208ef87cb266345da964d0380539cb719d7dae75b2cf896_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <form method=\"get\" action=\"{{ path('sylius_admin_product_index') }}\">
        <div class=\"ui inverted transparent icon input\">
            <input type=\"text\" name=\"criteria[search][value]\" placeholder=\"{{ 'sylius.ui.search_products'|trans }}...\">
            <i class=\"search link icon\"></i>
        </div>
    </form>
</div>
", "@SyliusAdmin/_search.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\_search.html.twig");
    }
}
