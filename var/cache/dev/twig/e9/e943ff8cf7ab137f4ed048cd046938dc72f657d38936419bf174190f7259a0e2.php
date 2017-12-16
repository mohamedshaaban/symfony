<?php

/* SyliusAttributeBundle:Types:default.html.twig */
class __TwigTemplate_3e5feabb4197d50eaab6101b37011d950b8c723113e7d41b515cf21189d2a481 extends Twig_Template
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
        $__internal_89099b3168aa6c1c43e8650a49399bd6665cfed2a5e0510104f1f1eb49c4ef6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89099b3168aa6c1c43e8650a49399bd6665cfed2a5e0510104f1f1eb49c4ef6f->enter($__internal_89099b3168aa6c1c43e8650a49399bd6665cfed2a5e0510104f1f1eb49c4ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        $__internal_dc297b3a5d7a741f7d82e73e9f1d456782ea2d346ef32ed1143ab7fd44f8b089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc297b3a5d7a741f7d82e73e9f1d456782ea2d346ef32ed1143ab7fd44f8b089->enter($__internal_dc297b3a5d7a741f7d82e73e9f1d456782ea2d346ef32ed1143ab7fd44f8b089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array()), "html", null, true);
        echo "
";
        
        $__internal_89099b3168aa6c1c43e8650a49399bd6665cfed2a5e0510104f1f1eb49c4ef6f->leave($__internal_89099b3168aa6c1c43e8650a49399bd6665cfed2a5e0510104f1f1eb49c4ef6f_prof);

        
        $__internal_dc297b3a5d7a741f7d82e73e9f1d456782ea2d346ef32ed1143ab7fd44f8b089->leave($__internal_dc297b3a5d7a741f7d82e73e9f1d456782ea2d346ef32ed1143ab7fd44f8b089_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ attribute.value }}
", "SyliusAttributeBundle:Types:default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle\\Resources\\views\\Types\\default.html.twig");
    }
}
