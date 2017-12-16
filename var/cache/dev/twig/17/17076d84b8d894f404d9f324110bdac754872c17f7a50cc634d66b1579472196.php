<?php

/* SyliusShopBundle:Product:index.html.twig */
class __TwigTemplate_5b7199472d41fa12ee1b02b0cd612b1c84cbb50ace6a6ab7ecdfb66a96201b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f4d2cd4a30cd423029e7eb9df4330b4a06148a821769fc1dff17a7e006bc47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4d2cd4a30cd423029e7eb9df4330b4a06148a821769fc1dff17a7e006bc47c->enter($__internal_8f4d2cd4a30cd423029e7eb9df4330b4a06148a821769fc1dff17a7e006bc47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:index.html.twig"));

        $__internal_8bf56110044e387fa1c985eee5ba09bd26ab02c78619211efd02edcb67c503b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf56110044e387fa1c985eee5ba09bd26ab02c78619211efd02edcb67c503b8->enter($__internal_8bf56110044e387fa1c985eee5ba09bd26ab02c78619211efd02edcb67c503b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f4d2cd4a30cd423029e7eb9df4330b4a06148a821769fc1dff17a7e006bc47c->leave($__internal_8f4d2cd4a30cd423029e7eb9df4330b4a06148a821769fc1dff17a7e006bc47c_prof);

        
        $__internal_8bf56110044e387fa1c985eee5ba09bd26ab02c78619211efd02edcb67c503b8->leave($__internal_8bf56110044e387fa1c985eee5ba09bd26ab02c78619211efd02edcb67c503b8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b71f0f17dc9396b303fc5fda10c10b5a5758cdf2ec5fc2ea97bbf44fe597827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b71f0f17dc9396b303fc5fda10c10b5a5758cdf2ec5fc2ea97bbf44fe597827->enter($__internal_1b71f0f17dc9396b303fc5fda10c10b5a5758cdf2ec5fc2ea97bbf44fe597827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_425799e67c37acfb1a3458f741e44fc8c8633a59a3ae9874b5d5d7f54d84c26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425799e67c37acfb1a3458f741e44fc8c8633a59a3ae9874b5d5d7f54d84c26e->enter($__internal_425799e67c37acfb1a3458f741e44fc8c8633a59a3ae9874b5d5d7f54d84c26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusShop/Product/Index/_header.html.twig", "SyliusShopBundle:Product:index.html.twig", 4)->display($context);
        // line 5
        echo "<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Product/Index/_sidebar.html.twig", "SyliusShopBundle:Product:index.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
    <div class=\"twelve wide column\">
        ";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_main.html.twig", "SyliusShopBundle:Product:index.html.twig", 10)->display($context);
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_425799e67c37acfb1a3458f741e44fc8c8633a59a3ae9874b5d5d7f54d84c26e->leave($__internal_425799e67c37acfb1a3458f741e44fc8c8633a59a3ae9874b5d5d7f54d84c26e_prof);

        
        $__internal_1b71f0f17dc9396b303fc5fda10c10b5a5758cdf2ec5fc2ea97bbf44fe597827->leave($__internal_1b71f0f17dc9396b303fc5fda10c10b5a5758cdf2ec5fc2ea97bbf44fe597827_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% block content %}
{% include '@SyliusShop/Product/Index/_header.html.twig' %}
<div class=\"ui stackable grid\">
    <div class=\"four wide column\">
        {% include '@SyliusShop/Product/Index/_sidebar.html.twig' %}
    </div>
    <div class=\"twelve wide column\">
        {% include '@SyliusShop/Product/Index/_main.html.twig' %}
    </div>
</div>
{% endblock %}
", "SyliusShopBundle:Product:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/index.html.twig");
    }
}
