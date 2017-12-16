<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ecd45ded2099dca81baa6b95fe470967b6aac3938d9ce25d643d2f6f3c0882c2 extends Twig_Template
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
        $__internal_4c0d6c91fec8f761d94a9554af00c7e415fdfe2834776bf129981f8e0af530bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0d6c91fec8f761d94a9554af00c7e415fdfe2834776bf129981f8e0af530bb->enter($__internal_4c0d6c91fec8f761d94a9554af00c7e415fdfe2834776bf129981f8e0af530bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d4a246dcef7736e567a2b78205ddedee82235a0478758caa86559625d4cb2ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a246dcef7736e567a2b78205ddedee82235a0478758caa86559625d4cb2ff1->enter($__internal_d4a246dcef7736e567a2b78205ddedee82235a0478758caa86559625d4cb2ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4c0d6c91fec8f761d94a9554af00c7e415fdfe2834776bf129981f8e0af530bb->leave($__internal_4c0d6c91fec8f761d94a9554af00c7e415fdfe2834776bf129981f8e0af530bb_prof);

        
        $__internal_d4a246dcef7736e567a2b78205ddedee82235a0478758caa86559625d4cb2ff1->leave($__internal_d4a246dcef7736e567a2b78205ddedee82235a0478758caa86559625d4cb2ff1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
