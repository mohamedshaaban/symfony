<?php

/* SyliusAdminBundle:Product/Tab:_taxonomy.html.twig */
class __TwigTemplate_0414206f718968c630e836ee2b2f9296794628d4882dd36c1da6cb7ad4d972ad extends Twig_Template
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
        $__internal_5dd33dde611b66238eed549f2b3d6a3b48add8916f62a456732cf296fb414836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd33dde611b66238eed549f2b3d6a3b48add8916f62a456732cf296fb414836->enter($__internal_5dd33dde611b66238eed549f2b3d6a3b48add8916f62a456732cf296fb414836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig"));

        $__internal_c0b5b5f348231cd51ee7dc61d30f5de6b7e9422c75c330d8c4df37d9f30a6c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b5b5f348231cd51ee7dc61d30f5de6b7e9422c75c330d8c4df37d9f30a6c6e->enter($__internal_c0b5b5f348231cd51ee7dc61d30f5de6b7e9422c75c330d8c4df37d9f30a6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxonomy"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "mainTaxon", array()), 'row');
        echo "

    <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.product_taxon"), "html", null, true);
        echo "</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_root_nodes");
        echo "\"
         data-taxon-leafs-url=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_taxon_leafs");
        echo "\"
    >
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "productTaxons", array()), 'widget');
        echo "
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 16, $this->getSourceContext()); })())) . ".tab_taxonomy"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_5dd33dde611b66238eed549f2b3d6a3b48add8916f62a456732cf296fb414836->leave($__internal_5dd33dde611b66238eed549f2b3d6a3b48add8916f62a456732cf296fb414836_prof);

        
        $__internal_c0b5b5f348231cd51ee7dc61d30f5de6b7e9422c75c330d8c4df37d9f30a6c6e->leave($__internal_c0b5b5f348231cd51ee7dc61d30f5de6b7e9422c75c330d8c4df37d9f30a6c6e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  51 => 10,  46 => 8,  42 => 7,  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxonomy\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxonomy'|trans }}</h3>
    {{ form_row(form.mainTaxon) }}

    <h4>{{ 'sylius.ui.product_taxon'|trans }}</h4>
    <div id=\"sylius-product-taxonomy-tree\"
         data-taxon-root-nodes-url=\"{{ path('sylius_admin_ajax_taxon_root_nodes') }}\"
         data-taxon-leafs-url=\"{{ path('sylius_admin_ajax_taxon_leafs') }}\"
    >
        {{ form_widget(form.productTaxons) }}
        <div class=\"ui inverted dimmer\">
            <div class=\"ui loader\"></div>
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_taxonomy', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_taxonomy.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Tab/_taxonomy.html.twig");
    }
}
