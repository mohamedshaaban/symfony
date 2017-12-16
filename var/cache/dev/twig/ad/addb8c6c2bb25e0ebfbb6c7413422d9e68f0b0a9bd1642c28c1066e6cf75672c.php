<?php

/* SyliusUiBundle:Grid/Field:rawLabel.html.twig */
class __TwigTemplate_49cd3ce15c195e7191ef7d7fa665411e9cb4adf971146def35030298f394452a extends Twig_Template
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
        $__internal_8bb92d541bfb072f654fef265b71f9a5e0b3d0f28320a34698b2f83da509e8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb92d541bfb072f654fef265b71f9a5e0b3d0f28320a34698b2f83da509e8ce->enter($__internal_8bb92d541bfb072f654fef265b71f9a5e0b3d0f28320a34698b2f83da509e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:rawLabel.html.twig"));

        $__internal_2d212c3af953a0a1b5f20982cc6117e447c9e5aded1dc1146818c740b2b2e2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d212c3af953a0a1b5f20982cc6117e447c9e5aded1dc1146818c740b2b2e2c1->enter($__internal_2d212c3af953a0a1b5f20982cc6117e447c9e5aded1dc1146818c740b2b2e2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:rawLabel.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusUi/Label/_default.html.twig", "SyliusUiBundle:Grid/Field:rawLabel.html.twig", 1)->display(array_merge($context, array("value" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_8bb92d541bfb072f654fef265b71f9a5e0b3d0f28320a34698b2f83da509e8ce->leave($__internal_8bb92d541bfb072f654fef265b71f9a5e0b3d0f28320a34698b2f83da509e8ce_prof);

        
        $__internal_2d212c3af953a0a1b5f20982cc6117e447c9e5aded1dc1146818c740b2b2e2c1->leave($__internal_2d212c3af953a0a1b5f20982cc6117e447c9e5aded1dc1146818c740b2b2e2c1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:rawLabel.html.twig";
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
        return new Twig_Source("{% include '@SyliusUi/Label/_default.html.twig' with {'value': data} %}
", "SyliusUiBundle:Grid/Field:rawLabel.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Field/rawLabel.html.twig");
    }
}
