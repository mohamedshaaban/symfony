<?php

/* SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig */
class __TwigTemplate_693c6fd37e988b33075f184d9099e996f53ee64ba88c8f76af95765a6dce4813 extends Twig_Template
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
        $__internal_218f34d9e9726a4bc183c2ca664d7e2ac235c337ae612074c8485464082c7688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218f34d9e9726a4bc183c2ca664d7e2ac235c337ae612074c8485464082c7688->enter($__internal_218f34d9e9726a4bc183c2ca664d7e2ac235c337ae612074c8485464082c7688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig"));

        $__internal_919f1ef28c24959ca26429f88e37352df307d0e4b909ab37d4b1a0ad2ab36845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919f1ef28c24959ca26429f88e37352df307d0e4b909ab37d4b1a0ad2ab36845->enter($__internal_919f1ef28c24959ca26429f88e37352df307d0e4b909ab37d4b1a0ad2ab36845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig"));

        // line 1
        $context["tree"] = $this;
        // line 2
        echo "
";
        // line 22
        echo "
<div class=\"ui large fluid vertical buttons\">
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.browse_all_products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_taxon_create");
        echo "\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_taxons"), "html", null, true);
        echo "
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        ";
        // line 36
        echo $context["tree"]->macro_render((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 36, $this->getSourceContext()); })()));
        echo "
    </div>
</div>
";
        
        $__internal_218f34d9e9726a4bc183c2ca664d7e2ac235c337ae612074c8485464082c7688->leave($__internal_218f34d9e9726a4bc183c2ca664d7e2ac235c337ae612074c8485464082c7688_prof);

        
        $__internal_919f1ef28c24959ca26429f88e37352df307d0e4b909ab37d4b1a0ad2ab36845->leave($__internal_919f1ef28c24959ca26429f88e37352df307d0e4b909ab37d4b1a0ad2ab36845_prof);

    }

    // line 3
    public function macro_render($__taxons__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxons" => $__taxons__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bb9635833d13028b8c53a8e57281f5e08c7f11aa10383a169199c171cdee5e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bb9635833d13028b8c53a8e57281f5e08c7f11aa10383a169199c171cdee5e5a->enter($__internal_bb9635833d13028b8c53a8e57281f5e08c7f11aa10383a169199c171cdee5e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            $__internal_1e29a625dc73b8e0a5eaa38285f916cd25786e861afacd31c9dd8335845a3172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_1e29a625dc73b8e0a5eaa38285f916cd25786e861afacd31c9dd8335845a3172->enter($__internal_1e29a625dc73b8e0a5eaa38285f916cd25786e861afacd31c9dd8335845a3172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render"));

            // line 4
            echo "    ";
            $context["tree"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 6, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 7
                echo "        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_per_taxon_index", array("taxonId" => twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "name", array()), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"list\">
                    ";
                // line 16
                echo $context["tree"]->macro_render(twig_get_attribute($this->env, $this->getSourceContext(), $context["taxon"], "children", array()));
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_1e29a625dc73b8e0a5eaa38285f916cd25786e861afacd31c9dd8335845a3172->leave($__internal_1e29a625dc73b8e0a5eaa38285f916cd25786e861afacd31c9dd8335845a3172_prof);

            
            $__internal_bb9635833d13028b8c53a8e57281f5e08c7f11aa10383a169199c171cdee5e5a->leave($__internal_bb9635833d13028b8c53a8e57281f5e08c7f11aa10383a169199c171cdee5e5a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 16,  110 => 12,  106 => 11,  100 => 7,  96 => 6,  93 => 5,  90 => 4,  72 => 3,  58 => 36,  49 => 30,  44 => 28,  39 => 26,  34 => 24,  30 => 22,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as tree %}

{% macro render(taxons) %}
    {% import _self as tree %}

    {% for taxon in taxons %}
        <div class=\"item\">
            <i class=\"folder icon\"></i>
            <div class=\"content\">
                <div class=\"header\">
                    <a href=\"{{ path('sylius_admin_product_per_taxon_index', {'taxonId': taxon.id}) }}\">
                        {{ taxon.name }}
                    </a>
                </div>
                <div class=\"list\">
                    {{ tree.render(taxon.children) }}
                </div>
            </div>
        </div>
    {% endfor %}
{% endmacro %}

<div class=\"ui large fluid vertical buttons\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"ui primary labeled icon button\">
        <i class=\"search icon\"></i>
        {{ 'sylius.ui.browse_all_products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_taxon_create') }}\" class=\"ui labeled icon button\">
        <i class=\"sitemap icon\"></i>
        {{ 'sylius.ui.manage_taxons'|trans }}
    </a>
</div>

<div class=\"ui segment\">
    <div class=\"ui list\">
        {{ tree.render(taxons) }}
    </div>
</div>
", "SyliusAdminBundle:Taxon:_treeWithoutButtons.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_treeWithoutButtons.html.twig");
    }
}
