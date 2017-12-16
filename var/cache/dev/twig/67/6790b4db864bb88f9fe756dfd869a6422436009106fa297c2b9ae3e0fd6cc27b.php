<?php

/* SyliusAdminBundle:Crud/Index:_actions.html.twig */
class __TwigTemplate_668dcde90b14d4011613fc9dbfc499299a7a95716f7ac5bc4fc0018054953225 extends Twig_Template
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
        $__internal_46c93957ac7c8c1839225ec753f9a2c021590f36fbf9373d114d44320f0f66af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c93957ac7c8c1839225ec753f9a2c021590f36fbf9373d114d44320f0f66af->enter($__internal_46c93957ac7c8c1839225ec753f9a2c021590f36fbf9373d114d44320f0f66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_actions.html.twig"));

        $__internal_b43a2121f319058fd3466ea08b6927ec4d0428daa43ffc11eca0614ba0aa5fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43a2121f319058fd3466ea08b6927ec4d0428daa43ffc11eca0614ba0aa5fb3->enter($__internal_b43a2121f319058fd3466ea08b6927ec4d0428daa43ffc11eca0614ba0aa5fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Index:_actions.html.twig"));

        // line 1
        echo "<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["definition"] ?? null), "actionGroups", array(), "any", false, true), "main", array(), "any", true, true)) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["definition"]) || array_key_exists("definition", $context) ? $context["definition"] : (function () { throw new Twig_Error_Runtime('Variable "definition" does not exist.', 4, $this->getSourceContext()); })()), "getEnabledActions", array(0 => "main"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 5
                echo "                ";
                echo call_user_func_array($this->env->getFunction('sylius_grid_render_action')->getCallable(), array((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 5, $this->getSourceContext()); })()), $context["action"], null));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        ";
        }
        // line 8
        echo "    </div>
</div>
";
        
        $__internal_46c93957ac7c8c1839225ec753f9a2c021590f36fbf9373d114d44320f0f66af->leave($__internal_46c93957ac7c8c1839225ec753f9a2c021590f36fbf9373d114d44320f0f66af_prof);

        
        $__internal_b43a2121f319058fd3466ea08b6927ec4d0428daa43ffc11eca0614ba0aa5fb3->leave($__internal_b43a2121f319058fd3466ea08b6927ec4d0428daa43ffc11eca0614ba0aa5fb3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Index:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  36 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"middle aligned column\">
    <div class=\"ui right floated buttons\">
        {% if definition.actionGroups.main is defined %}
            {% for action in definition.getEnabledActions('main') %}
                {{ sylius_grid_render_action(resources, action, null) }}
            {% endfor %}
        {% endif %}
    </div>
</div>
", "SyliusAdminBundle:Crud/Index:_actions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/Index/_actions.html.twig");
    }
}
