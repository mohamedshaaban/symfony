<?php

/* @SyliusAdmin/Crud/Index/_actions.html.twig */
class __TwigTemplate_96bd96508b3f9fb955f789a3e6d1b04917bd04285eab6020c0b16c2cb9b28ce5 extends Twig_Template
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
        $__internal_97375578a40f8d147ea71b23483b79f7482d81ab5a3f8995599d12f84aec08b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97375578a40f8d147ea71b23483b79f7482d81ab5a3f8995599d12f84aec08b5->enter($__internal_97375578a40f8d147ea71b23483b79f7482d81ab5a3f8995599d12f84aec08b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_actions.html.twig"));

        $__internal_f896aa53de5b0b173cb52874d100f231226e42a7daed24ad16a23da97ceaa038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f896aa53de5b0b173cb52874d100f231226e42a7daed24ad16a23da97ceaa038->enter($__internal_f896aa53de5b0b173cb52874d100f231226e42a7daed24ad16a23da97ceaa038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Crud/Index/_actions.html.twig"));

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
        
        $__internal_97375578a40f8d147ea71b23483b79f7482d81ab5a3f8995599d12f84aec08b5->leave($__internal_97375578a40f8d147ea71b23483b79f7482d81ab5a3f8995599d12f84aec08b5_prof);

        
        $__internal_f896aa53de5b0b173cb52874d100f231226e42a7daed24ad16a23da97ceaa038->leave($__internal_f896aa53de5b0b173cb52874d100f231226e42a7daed24ad16a23da97ceaa038_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Crud/Index/_actions.html.twig";
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
", "@SyliusAdmin/Crud/Index/_actions.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\Index\\_actions.html.twig");
    }
}
