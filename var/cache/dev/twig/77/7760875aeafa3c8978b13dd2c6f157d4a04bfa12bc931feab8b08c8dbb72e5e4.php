<?php

/* SyliusAdminBundle:Taxon:_slugField.html.twig */
class __TwigTemplate_8a2386f463a812fa47ecfde0c00ef5d2e2d5c19faac09131a42973eb9fb65381 extends Twig_Template
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
        $__internal_301633777cec5e7d16fc117d6f1e0c8b99eed8b21e4eea78d127bc20d0f3dfcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301633777cec5e7d16fc117d6f1e0c8b99eed8b21e4eea78d127bc20d0f3dfcd->enter($__internal_301633777cec5e7d16fc117d6f1e0c8b99eed8b21e4eea78d127bc20d0f3dfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

        $__internal_893c6b55bfe3ebcaa3e298c9edac682e5b6f6a1af64d99d33ea18caaff9eadf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893c6b55bfe3ebcaa3e298c9edac682e5b6f6a1af64d99d33ea18caaff9eadf5->enter($__internal_893c6b55bfe3ebcaa3e298c9edac682e5b6f6a1af64d99d33ea18caaff9eadf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

        // line 1
        echo "<div class=\"";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "required", array())) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 2, $this->getSourceContext()); })()), 'label');
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 3, $this->getSourceContext()); })()), "slug", array()) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 4, $this->getSourceContext()); })()), 'widget', array("attr" => array("data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_taxon_slug"), "data-parent" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 4, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"))));
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 7, $this->getSourceContext()); })()), 'widget', array("attr" => array("readonly" => "readonly", "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_ajax_generate_taxon_slug"))));
            echo "
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new Twig_Error_Runtime('Variable "slugField" does not exist.', 13, $this->getSourceContext()); })()), 'errors');
        echo "
</div>
";
        
        $__internal_301633777cec5e7d16fc117d6f1e0c8b99eed8b21e4eea78d127bc20d0f3dfcd->leave($__internal_301633777cec5e7d16fc117d6f1e0c8b99eed8b21e4eea78d127bc20d0f3dfcd_prof);

        
        $__internal_893c6b55bfe3ebcaa3e298c9edac682e5b6f6a1af64d99d33ea18caaff9eadf5->leave($__internal_893c6b55bfe3ebcaa3e298c9edac682e5b6f6a1af64d99d33ea18caaff9eadf5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 7,  48 => 6,  42 => 4,  40 => 3,  36 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{% if slugField.vars.required %}required {% endif %}field{% if slugField.vars.errors|length > 0 %} error{% endif %} ui loadable form\">
    {{ form_label(slugField) }}
    {% if resource.slug == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_taxon_slug'), 'data-parent': app.request.attributes.get('id')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_taxon_slug')}}) }}
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "SyliusAdminBundle:Taxon:_slugField.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Taxon/_slugField.html.twig");
    }
}
