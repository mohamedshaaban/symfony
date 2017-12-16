<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_c1ba8beb899d61d5056e7f8f03cc6ca9f23898abc67cb8df02de6291be79df1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7954c44afb379f57f212efe2cea6a360a1d65146d3d6e296f3af10ad9fa7646c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7954c44afb379f57f212efe2cea6a360a1d65146d3d6e296f3af10ad9fa7646c->enter($__internal_7954c44afb379f57f212efe2cea6a360a1d65146d3d6e296f3af10ad9fa7646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        $__internal_008720b743f6dac4872894672e1046c21e7337601810e27af16c6f8b845ade43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008720b743f6dac4872894672e1046c21e7337601810e27af16c6f8b845ade43->enter($__internal_008720b743f6dac4872894672e1046c21e7337601810e27af16c6f8b845ade43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7954c44afb379f57f212efe2cea6a360a1d65146d3d6e296f3af10ad9fa7646c->leave($__internal_7954c44afb379f57f212efe2cea6a360a1d65146d3d6e296f3af10ad9fa7646c_prof);

        
        $__internal_008720b743f6dac4872894672e1046c21e7337601810e27af16c6f8b845ade43->leave($__internal_008720b743f6dac4872894672e1046c21e7337601810e27af16c6f8b845ade43_prof);

    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_cdbf5a151943e650f1ae6663e0588fb75f76970417372cd6977d440674125cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbf5a151943e650f1ae6663e0588fb75f76970417372cd6977d440674125cb5->enter($__internal_cdbf5a151943e650f1ae6663e0588fb75f76970417372cd6977d440674125cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        $__internal_fa1a76983e521b90521e2c8faaafeac5b01103cf2cbb26fc2c81e2a0c67c610d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1a76983e521b90521e2c8faaafeac5b01103cf2cbb26fc2c81e2a0c67c610d->enter($__internal_fa1a76983e521b90521e2c8faaafeac5b01103cf2cbb26fc2c81e2a0c67c610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 9
        echo "            ";
        
        $__internal_fa1a76983e521b90521e2c8faaafeac5b01103cf2cbb26fc2c81e2a0c67c610d->leave($__internal_fa1a76983e521b90521e2c8faaafeac5b01103cf2cbb26fc2c81e2a0c67c610d_prof);

        
        $__internal_cdbf5a151943e650f1ae6663e0588fb75f76970417372cd6977d440674125cb5->leave($__internal_cdbf5a151943e650f1ae6663e0588fb75f76970417372cd6977d440674125cb5_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  50 => 8,  37 => 10,  35 => 8,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block fos_oauth_server_content %}
            {% endblock fos_oauth_server_content %}
        </div>
    </body>
</html>
", "FOSOAuthServerBundle::layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\friendsofsymfony\\oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
