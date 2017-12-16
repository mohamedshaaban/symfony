<?php

/* SyliusUiBundle:Grid:_history.html.twig */
class __TwigTemplate_c2df12cc2b7787c119c087e1f9a266af7ee1d5b2ef41da3253b945bea88b5330 extends Twig_Template
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
        $__internal_2d50aa7d26a08d30113d6b43aaeea39a1e6471d0f3d6335eaae82e3e16e26b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d50aa7d26a08d30113d6b43aaeea39a1e6471d0f3d6335eaae82e3e16e26b7e->enter($__internal_2d50aa7d26a08d30113d6b43aaeea39a1e6471d0f3d6335eaae82e3e16e26b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_history.html.twig"));

        $__internal_01565d96df3b2ca6e5785f3c6a7f65cbe5474223e00236a065c9d1291b525e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01565d96df3b2ca6e5785f3c6a7f65cbe5474223e00236a065c9d1291b525e1b->enter($__internal_01565d96df3b2ca6e5785f3c6a7f65cbe5474223e00236a065c9d1291b525e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid:_history.html.twig"));

        // line 1
        $context["table"] = $this->loadTemplate("@SyliusUi/Macro/table.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 1);
        // line 2
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusUiBundle:Grid:_history.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "definition", array());
        // line 5
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 5, $this->getSourceContext()); })()), "data", array());
        // line 6
        echo "
";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 7, $this->getSourceContext()); })())) > 0)) {
            // line 8
            echo "    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                ";
            // line 11
            echo $context["table"]->macro_headers((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 11, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "attributes", array()));
            echo "
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 15, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                echo "                ";
                echo $context["table"]->macro_row((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 16, $this->getSourceContext()); })()), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 16, $this->getSourceContext()); })()), $context["row"]);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </tbody>
    </table>
";
        } else {
            // line 21
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
";
        }
        // line 23
        echo "
";
        
        $__internal_2d50aa7d26a08d30113d6b43aaeea39a1e6471d0f3d6335eaae82e3e16e26b7e->leave($__internal_2d50aa7d26a08d30113d6b43aaeea39a1e6471d0f3d6335eaae82e3e16e26b7e_prof);

        
        $__internal_01565d96df3b2ca6e5785f3c6a7f65cbe5474223e00236a065c9d1291b525e1b->leave($__internal_01565d96df3b2ca6e5785f3c6a7f65cbe5474223e00236a065c9d1291b525e1b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid:_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  71 => 21,  66 => 18,  57 => 16,  53 => 15,  46 => 11,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/table.html.twig' as table %}
{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% if data|length > 0 %}
    <table class=\"ui stackable celled table\">
        <thead>
            <tr>
                {{ table.headers(resources, definition, app.request.attributes) }}
            </tr>
        </thead>
        <tbody>
            {% for row in data %}
                {{ table.row(resources, definition, row) }}
            {% endfor %}
        </tbody>
    </table>
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}

", "SyliusUiBundle:Grid:_history.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/_history.html.twig");
    }
}
