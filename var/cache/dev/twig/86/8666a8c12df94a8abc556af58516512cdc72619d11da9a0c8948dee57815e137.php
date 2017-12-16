<?php

/* SyliusUiBundle:Form/Buttons:_create.html.twig */
class __TwigTemplate_8148e46e32a5349c452a84bb564264a12bf38f4e772152cd7655e52671b7a318 extends Twig_Template
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
        $__internal_6c88490877556a0558e76a70aa8e57ab7f816d1f0e2923b0005356cc6b847025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c88490877556a0558e76a70aa8e57ab7f816d1f0e2923b0005356cc6b847025->enter($__internal_6c88490877556a0558e76a70aa8e57ab7f816d1f0e2923b0005356cc6b847025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_create.html.twig"));

        $__internal_76ff88f3f906bd88cb1509b044c1b5c4c6373128214d6b7aae14ab9f312f06d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ff88f3f906bd88cb1509b044c1b5c4c6373128214d6b7aae14ab9f312f06d7->enter($__internal_76ff88f3f906bd88cb1509b044c1b5c4c6373128214d6b7aae14ab9f312f06d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_create.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusUiBundle:Form/Buttons:_create.html.twig", 4)->display(array_merge($context, array("path" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["paths"] ?? null), "cancel", array()), null)) : (null)))));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_6c88490877556a0558e76a70aa8e57ab7f816d1f0e2923b0005356cc6b847025->leave($__internal_6c88490877556a0558e76a70aa8e57ab7f816d1f0e2923b0005356cc6b847025_prof);

        
        $__internal_76ff88f3f906bd88cb1509b044c1b5c4c6373128214d6b7aae14ab9f312f06d7->leave($__internal_76ff88f3f906bd88cb1509b044c1b5c4c6373128214d6b7aae14ab9f312f06d7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\"><i class=\"plus icon\"></i>{{- 'sylius.ui.create'|trans -}}</button>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "SyliusUiBundle:Form/Buttons:_create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/Buttons/_create.html.twig");
    }
}
