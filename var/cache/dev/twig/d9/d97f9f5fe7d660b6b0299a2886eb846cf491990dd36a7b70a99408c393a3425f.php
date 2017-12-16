<?php

/* @SyliusUi/Modal/_confirmation.html.twig */
class __TwigTemplate_340ed6a958f32c0dbabbbf06ec0f6daa5bba57e26f967668ca851d304ee95fd7 extends Twig_Template
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
        $__internal_3eaf42006425c96d1ae0e61ea8d70b5a70ebf89e6a87889de5d0704b488f4e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eaf42006425c96d1ae0e61ea8d70b5a70ebf89e6a87889de5d0704b488f4e6b->enter($__internal_3eaf42006425c96d1ae0e61ea8d70b5a70ebf89e6a87889de5d0704b488f4e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

        $__internal_2967cf8b8de8ba42c7048e6c3b94c2f654c1ce7f350ff33ab2f461a07e2f77e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2967cf8b8de8ba42c7048e6c3b94c2f654c1ce7f350ff33ab2f461a07e2f77e7->enter($__internal_2967cf8b8de8ba42c7048e6c3b94c2f654c1ce7f350ff33ab2f461a07e2f77e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Modal/_confirmation.html.twig"));

        // line 1
        echo "<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.confirm_your_action"), "html", null, true);
        echo "
    </div>
    <div class=\"content\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.are_your_sure_you_want_to_perform_this_action"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
        echo "
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_3eaf42006425c96d1ae0e61ea8d70b5a70ebf89e6a87889de5d0704b488f4e6b->leave($__internal_3eaf42006425c96d1ae0e61ea8d70b5a70ebf89e6a87889de5d0704b488f4e6b_prof);

        
        $__internal_2967cf8b8de8ba42c7048e6c3b94c2f654c1ce7f350ff33ab2f461a07e2f77e7->leave($__internal_2967cf8b8de8ba42c7048e6c3b94c2f654c1ce7f350ff33ab2f461a07e2f77e7_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Modal/_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  44 => 12,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui small basic modal\" id=\"confirmation-modal\">
    <div class=\"ui icon header\">
        <i class=\"warning sign icon\"></i>
        {{ 'sylius.ui.confirm_your_action'|trans }}
    </div>
    <div class=\"content\">
        <p>{{ 'sylius.ui.are_your_sure_you_want_to_perform_this_action'|trans }}</p>
    </div>
    <div class=\"actions\">
        <div class=\"ui red basic cancel inverted button\">
            <i class=\"remove icon\"></i>
            {{ 'sylius.ui.no_label'|trans }}
        </div>
        <div class=\"ui green ok inverted button\" id=\"confirmation-button\">
            <i class=\"checkmark icon\"></i>
            {{ 'sylius.ui.yes_label'|trans }}
        </div>
    </div>
</div>
", "@SyliusUi/Modal/_confirmation.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Modal\\_confirmation.html.twig");
    }
}
