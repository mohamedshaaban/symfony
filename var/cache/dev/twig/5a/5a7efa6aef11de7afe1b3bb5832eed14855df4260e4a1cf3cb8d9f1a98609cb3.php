<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4e4dcbeaca5e777ea3eecdc29af3ae87ce20fc744b091cebbcf3f4a781574ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c5adb0b6702507c41eaccda4cf2922f923c05063f503123bee41cdea0a758c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c5adb0b6702507c41eaccda4cf2922f923c05063f503123bee41cdea0a758c->enter($__internal_e6c5adb0b6702507c41eaccda4cf2922f923c05063f503123bee41cdea0a758c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9e6b41dedefefcfd53de0ec566d22f2f1c392fab0c24e02dfac77d801368bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6b41dedefefcfd53de0ec566d22f2f1c392fab0c24e02dfac77d801368bdd0->enter($__internal_9e6b41dedefefcfd53de0ec566d22f2f1c392fab0c24e02dfac77d801368bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e6c5adb0b6702507c41eaccda4cf2922f923c05063f503123bee41cdea0a758c->leave($__internal_e6c5adb0b6702507c41eaccda4cf2922f923c05063f503123bee41cdea0a758c_prof);

        
        $__internal_9e6b41dedefefcfd53de0ec566d22f2f1c392fab0c24e02dfac77d801368bdd0->leave($__internal_9e6b41dedefefcfd53de0ec566d22f2f1c392fab0c24e02dfac77d801368bdd0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_62ce531ecfe5a0e2217cd05fef6c50a000bffc2138d65f9caf443a810eac776c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62ce531ecfe5a0e2217cd05fef6c50a000bffc2138d65f9caf443a810eac776c->enter($__internal_62ce531ecfe5a0e2217cd05fef6c50a000bffc2138d65f9caf443a810eac776c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3848346063ec57f47e0fea9cc9554be7756644c2455c6afdbe38c4bf59a85e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3848346063ec57f47e0fea9cc9554be7756644c2455c6afdbe38c4bf59a85e6b->enter($__internal_3848346063ec57f47e0fea9cc9554be7756644c2455c6afdbe38c4bf59a85e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3848346063ec57f47e0fea9cc9554be7756644c2455c6afdbe38c4bf59a85e6b->leave($__internal_3848346063ec57f47e0fea9cc9554be7756644c2455c6afdbe38c4bf59a85e6b_prof);

        
        $__internal_62ce531ecfe5a0e2217cd05fef6c50a000bffc2138d65f9caf443a810eac776c->leave($__internal_62ce531ecfe5a0e2217cd05fef6c50a000bffc2138d65f9caf443a810eac776c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
