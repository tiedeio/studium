<?php
/**
 * Created by PhpStorm.
 * User: Ino
 * Date: 14.04.15
 * Time: 21:28
 */

namespace Model\Employee;


class Employee {

    private $employeeid;
    private $firstname;
    private $lastname;
    private $street;
    private $house_number;
    private $city;
    private $postcode;
    private $surf_certificate;
    private $sail_certificate;
    private $reference1;
    private $reference2;
    private $reference3;
    private $reference4;
    private $reference5;
    private $ranking;
    private $salary;
    private $available_times;

    public function __construct()
    {
    }


        /**
     * @return mixed
     */
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * @param mixed $employeeid
     *
     * @return Employee
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     *
     * @return Employee
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     *
     * @return Employee
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     *
     * @return Employee
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHouseNumber()
    {
        return $this->house_number;
    }

    /**
     * @param mixed $house_number
     *
     * @return Employee
     */
    public function setHouseNumber($house_number)
    {
        $this->house_number = $house_number;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return Employee
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     *
     * @return Employee
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurfCertificate()
    {
        return $this->surf_certificate;
    }

    /**
     * @param mixed $surf_certificate
     *
     * @return Employee
     */
    public function setSurfCertificate($surf_certificate)
    {
        $this->surf_certificate = $surf_certificate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSailCertificate()
    {
        return $this->sail_certificate;
    }

    /**
     * @param mixed $sail_certificate
     *
     * @return Employee
     */
    public function setSailCertificate($sail_certificate)
    {
        $this->sail_certificate = $sail_certificate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference1()
    {
        return $this->reference1;
    }

    /**
     * @param mixed $reference1
     *
     * @return Employee
     */
    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference2()
    {
        return $this->reference2;
    }

    /**
     * @param mixed $reference2
     *
     * @return Employee
     */
    public function setReference2($reference2)
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference3()
    {
        return $this->reference3;
    }

    /**
     * @param mixed $reference3
     *
     * @return Employee
     */
    public function setReference3($reference3)
    {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference4()
    {
        return $this->reference4;
    }

    /**
     * @param mixed $reference4
     *
     * @return Employee
     */
    public function setReference4($reference4)
    {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference5()
    {
        return $this->reference5;
    }

    /**
     * @param mixed $reference5
     *
     * @return Employee
     */
    public function setReference5($reference5)
    {
        $this->reference5 = $reference5;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @param mixed $ranking
     *
     * @return Employee
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     *
     * @return Employee
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailableTimes()
    {
        return $this->available_times;
    }

    /**
     * @param mixed $available_times
     *
     * @return Employee
     */
    public function setAvailableTimes($available_times)
    {
        $this->available_times = $available_times;
        return $this;
    }
}