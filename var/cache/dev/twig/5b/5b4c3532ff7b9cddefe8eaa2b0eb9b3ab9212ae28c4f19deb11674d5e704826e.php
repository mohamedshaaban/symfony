<?php

/* SyliusUiBundle::_javascripts.html.twig */
class __TwigTemplate_3df31e5fa6ab6053045a7f8c77d6d74a373f450935c938e79f9be85fe72ec6e6 extends Twig_Template
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
        $__internal_e151cd54926d16bc707bb7cc59ec816f4d0a8cfc9f990520471ac7362fc9c047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e151cd54926d16bc707bb7cc59ec816f4d0a8cfc9f990520471ac7362fc9c047->enter($__internal_e151cd54926d16bc707bb7cc59ec816f4d0a8cfc9f990520471ac7362fc9c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_javascripts.html.twig"));

        $__internal_0b7cc27c881bdd63142a4b29c4036bf6273738e04f640b15ca25399f98a70c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7cc27c881bdd63142a4b29c4036bf6273738e04f640b15ca25399f98a70c34->enter($__internal_0b7cc27c881bdd63142a4b29c4036bf6273738e04f640b15ca25399f98a70c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_javascripts.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e151cd54926d16bc707bb7cc59ec816f4d0a8cfc9f990520471ac7362fc9c047->leave($__internal_e151cd54926d16bc707bb7cc59ec816f4d0a8cfc9f990520471ac7362fc9c047_prof);

        
        $__internal_0b7cc27c881bdd63142a4b29c4036bf6273738e04f640b15ca25399f98a70c34->leave($__internal_0b7cc27c881bdd63142a4b29c4036bf6273738e04f640b15ca25399f98a70c34_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_javascripts.html.twig";
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
        return new Twig_Source("<script src=\"{{ asset(path) }}\"></script>
", "SyliusUiBundle::_javascripts.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/_javascripts.html.twig");
    }
}
